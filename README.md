# Twig Benchmark

##  TL;DR

Code in this repo is meant to test the performance differences between three ways to do the same thing: render a list of items with various content.

## Complete story

Think of creating a set of Twig templates to supply HTML code for complex functionality, such as a data grid capable of showing more than scalar values in individual cells. Links, images, buttons, lists, JS code for handling modal dialogues, uploads etc.

You probably want to re-use the component across the whole application and only feed it some configuration and some data in places you need the data grid to show up.

You'll need to re-use Twig code snippets. But which one? It gets interesting the moment you realise you need to account for Twig's auto escaping, together with the need to occasionally supply your reusable piece of code with some custom HTML markup instead of a scalar value.


## How to benchmark yourself

1. Check out repo
2. `composer install`
3. `php index.php 100000`

## My results

Below is my result on a 2019 Macbook Pro with i7:

```
Twig Benchmark
Usage: php index.php [number of iterations]

Running 100000 iterations.
embed  4253ms
include    3428ms
macro  2695ms
```

## My conclusion

**Embeds** are a pretty good fit for a use case where you know what the surrounding markup of the code you wish to show is, and you want to repeat that markup with varying content

Think of a "Card component", where you have a header, body, and footer. I found `{% embed %}` to work the best in this case because your body becomes just a block—no need to worry about setting the body content into a variable and then passing that variable.

Imagine doing that with a macro. You'd either have to have one macro with the HTML markup for the start of the container (say `<div>`), and the other to end it (`</div>`). The other way is to pass the whole body as an argument to the macro. AFAIK you'd have to use `|raw` if your content contains any HTML, so effectively, you're on your own when it comes to escaping dangerous characters. I don't think that's the safest way to work.

**Includes** are awesome because of their ease of use. `{% include 'script.twig' with {foo: bar, bar: baz} only %}` just looks so much more understandable than doing the same with a macro: `{% include 'script.twig' as macro %} {{ macro.name(bar, baz) }}`.

**Macros** are just quick.

The biggest issue I have with macros is the way the arguments work. Maybe I'm doing it wrong, but I find it super hard to refactor any Twig code because of it. The strict argument order is a nightmare, especially after the named arguments showed up in PHP 8.

I would use a macro for any tiny piece of code that repeats frequently and displays some simple scalar value. Macros are perfect for that.

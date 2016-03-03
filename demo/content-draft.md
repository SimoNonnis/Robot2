#Content for next version of R2

it’s always useful to have more tools available for getting the job done—so long
as you know how to use them—and functional programming certainly gives us a useful
set of tools for writing JavaScript. But I think there’s more to it than that.
Functional programming opens up a different style of programming.
This in turn allows us to conceptualize problems and solutions in different ways.
This in turn allows us to conceptualize problems and solutions in different ways.
There are two key features to functional programming:
Writing pure functions, which is important if you want to give functional
programming a go; and
Pointfree programming style, which is not as important but good to understand.

##Purity
If you read about functional programming, you will eventually come across the
concept of pure and impure functions. Pure functions are functions that fulfill
two criteria:
Calling the function with the same inputs always returns the same output.
Calling the function produces no side-effects: No network calls; no files
read or written; no database queries; no DOM elements modified; no global
variables modified; and no console output. Nothing.

Now, the trouble with this is that the whole point of writing computer
programs is the side effects. Making a network call and rendering DOM
elements is at the core of what a web application does; it’s what JavaScript
was invented for.

So what’s an aspiring functional programmer to do? Well, the key is that
we don’t avoid impure functions entirely, we just give them a healthy
amount of respect, and put-off dealing with them until we absolutely have to.

Logic is thought. Effects are action. Therefore the wise think before acting,
and act only when the thinking is done.
If you try to perform effects and logic at the same time, you may create
hidden side effects which cause bugs in the logic. Keep functions small.
Do one thing at a time, and do it well.

In other words, with functional programming, we generally try and work out
the logic of what we’re trying to achieve first, before we do anything that
has potential side effects.

I pursuit the idea of simpler programming, FP helps me to go in the right direcion

Code is mostly for humans, your teammates or your feature self.
Your computer only cares about machine code, a series of binary 0s and 1s, that comes from compilation.
You should strive not just writing code that work correctly, but code that make sense when examined,
easy to read and refactor, with good quality comments.

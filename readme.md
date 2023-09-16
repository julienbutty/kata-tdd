# PHP Kata Project

Welcome to the PHP Kata project! This project is designed to train myself and improve my programming skills by solving algorithmic challenges while practicing Test-Driven Development (TDD) using PHPUnit.
Each kata comes form https://codingdojo.org/

## Description

Kata are small algorithmic challenges that will test your ability to solve programming problems efficiently and elegantly. The goal is to solve these challenges by following a TDD approach, which means you'll start by writing tests for each feature you want to implement and then implement the code to make those tests pass.

## Project Structure

The project is organized as follows:

- Each algorithmic challenge (Kata) is stored in a separate folder at the root of the project.
- Each Kata folder contains a PHP file (`KataX.php`) for the implementation of the solution.
- The corresponding unit tests are in the `tests/` folder.
- Use PHPUnit to run the tests and verify if your implementation is correct.

## Getting Started

1. Clone this repository to your local machine:
```
git clone https://github.com/julienbutty/kata-tdd.git
```

2. Install the dependencies using Composer (make sure you have Composer installed):

```
composer install
```

3. You could launch the tests by using the Makefile command
```
make phpunit # launch all tests
make phpunit-watcher # Re run tests whenever you change code
```


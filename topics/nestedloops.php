<!-- NESTED LOOPS PAGE  -->

<?php session_start(); ?>
<div class="content">
  <h1>Nested Loops</h1>
  <p>&nbsp&nbsp&nbsp&nbspA nested loop has one loop inside of another. These are typically used for working with two dimensions such as printing stars in rows and columns as shown below. When a loop is nested inside another loop, the inner loop runs many times inside the outer loop. In each iteration of the outer loop, the inner loop will be re-started. The inner loop must finish all of its iterations before the outer loop can continue to its next iteration.</p>

  <pre class="code py">
    for i in range(10):
        for j in range(5):
            #some code
  </pre>
  <h3>Try it yourself</h3>
    <p>You should write the height and width of the square, and the program output square with *</p>
    <form action="vendor/nloops.php" method="get">
      <label for="h">Height of the square: </label><input type="number" name="h">
      <label for="h">Width of the square: </label><input type="number" name="w">
      <input type="submit" value="Find">
    </form>

    <span id="result"><?php
    if (isset($_SESSION["res1"])) {
      echo nl2br($_SESSION["res1"]);
      unset($_SESSION["res1"]);
    }
  ?></span>
  
  <br><hr>
  <h2>*EXTRA TOPIC: Recursion</h2>
  <p>In computer science, recursion is a method of solving a computational problem where the solution depends on solutions to smaller instances of the same problem. Recursion solves such recursive problems by using functions that call themselves from within their own code. The approach can be applied to many types of problems, and recursion is one of the central ideas of computer science.</p>
  <div class="dw">
  <h4>There one example for using recursion:</h4>
    <pre class="code py">
            def factorial(x: int) -> int:
                if x == 1:
                    return 1
                if x == 0:
                    return 0
                retrun x * factorial(x - 1)
    </pre>
    <h3>Try it yourself</h3>
    <p>You should write one integer, and in the output we get a factorial of this number(If you write a big number, it would be work slow. In real life recursion dont have any practical usage.)</p>
    <form action="vendor/recursion.php" method="get">
      <input type="number" name="num">
      <input type="submit" value="Find">
    </form>

    <span id="result"><?php
    if (isset($_SESSION["res"])) {
      echo $_SESSION["res"];
      unset($_SESSION["res"]);
    }
  ?></span>
</div>

<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
  }

  .content {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
  }

  h1 {
    font-size: 2em;
    margin-bottom: 10px;
  }

  h2 {
    color: red;
  }

  p {
    line-height: 1.5;
    margin-bottom: 15px;
  }

  .code {
    background-color: #f5f5f5;
    padding: 10px;
    border-radius: 3px;
    font-family: monospace;
  }

  form {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
  }

  label {
    margin-right: 10px;
  }

  .number {
    width: 100px;
    padding: 5px;
    border: 1px solid #ccc;
  }

  input[type="submit"] {
    background-color: rgb(74, 119, 234);
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: rgb(65, 103, 200);
  }

  .content #result { /* Add class for session result message */
    font-weight: bold;
    margin-top: 10px;
  }
</style>
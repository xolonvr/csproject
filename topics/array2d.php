<!-- 2D ARRAY page -->

<?php session_start(); ?>
<div class="content">
  <h1>Two-Dimensional Array</h1>
  <p>&nbsp&nbsp&nbsp&nbspTwo-dimensional arrays can be defined as arrays within an array. 2D arrays erected as metrics, which is a collection of rows and columns. It is common to design 2D arrays to accomplish a database that is similar to the data structure.</p>

  <pre class="code py">
    lst = [[1, 0, 1], [0, 1, 1], [1, 0, 0]] #Example of creating 2D array
  </pre>

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
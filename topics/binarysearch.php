<!-- BINARY SEARCH PAGE  -->

<?php session_start(); ?>
<div class="content">
  <h1>Binary Search</h1>
  <p>Binary search divides the array in half and determines the part of the array that contains the key value.  To perform a binary search, the array must be sorted.</p>

  <pre class="code py">
    def binary_search(lst: list, target: int) -> bool:
      start = 0
      end = len(lst) - 1
      while start <= end:
        mid = (start + end) // 2
        if lst[mid] == target:
          return True
        elif lst[mid] > target:
          end = mid - 1
        else:
          start = mid + 1
      return False
  </pre>

  <h2>Try it yourself</h2>
  <p>We have the sorted one-dimensional array:<br> 1 4 6 12 32 45 95 126 145 234 235 342 422 432 509 536 541 683</p>
  <form action="vendor/bsearch.php" method="get" id="prac">
    <label for="">Enter the target integer: </label>
    <input type="number" class="number" value=1 name="target">
    <input type="submit" value="FIND">
  </form>

  <!-- IF there are result of the process, the result will be shown -->
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
<!-- QUICK SORT PAGE -->

<?php session_start(); ?>
<div class="content">
  <h1>Quick Sort</h1><br>
  <p>&nbsp&nbsp&nbsp&nbspQuicksort is an efficient, general-purpose sorting algorithm. Quicksort was developed by British computer scientist Tony Hoare in 1959 and published in 1961. It is still a commonly used algorithm for sorting. Overall, it is slightly faster than merge sort and heapsort for randomized data, particularly on larger distributions.

Quicksort is a divide-and-conquer algorithm. It works by selecting a 'pivot' element from the array and partitioning the other elements into two sub-arrays, according to whether they are less than or greater than the pivot. For this reason, it is sometimes called partition-exchange sort. The sub-arrays are then sorted recursively. This can be done in-place, requiring small additional amounts of memory to perform the sorting.

Quicksort is a comparison sort, meaning that it can sort items of any type for which a "less-than" relation (formally, a total order) is defined. It is a comparison-based sort since elements a and b are only swapped in case their relative order has been obtained in the transitive closure of prior comparison-outcomes. Most implementations of quicksort are not stable, meaning that the relative order of equal sort items is not preserved.

Mathematical analysis of quicksort shows that, on average, the algorithm takes 

  </p><br>

  <pre class="code py">
    def quicksort(arr):
        if len(arr) <= 1:
            return arr
        pivot = arr[len(arr) // 2]
        left = [x for x in arr if x < pivot]
        middle = [x for x in arr if x == pivot]
        right = [x for x in arr if x > pivot]
        return quicksort(left) + middle + quicksort(right)
  </pre>

  <h2>Try it yourself</h2>
  <p>We have the unsorted one-dimensional array:<br> 33 6 85 101 12 1 124 1934 213 94 3 324 43 5 1 534 34</p>
  <form action="vendor/qsort.php" method="get" id="prac">
    <input type="submit" value="SORT">
  </form>

  <span id="result"><?php
    if (isset($_SESSION["sres"])) {
      echo $_SESSION["sres"];
      unset($_SESSION["sres"]);
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
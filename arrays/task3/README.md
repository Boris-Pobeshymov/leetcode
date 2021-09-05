<h1>Arrays section</h1>

<h3>Task 3</h2>
<p>Given an array, rotate the array to the right by k steps, where k is non-negative.</p>
   
<h5>Example 1:</h5>
<pre>
Input: nums = [1,2,3,4,5,6,7], k = 3
Output: [5,6,7,1,2,3,4]
Explanation:
rotate 1 steps to the right: [7,1,2,3,4,5,6]
rotate 2 steps to the right: [6,7,1,2,3,4,5]
rotate 3 steps to the right: [5,6,7,1,2,3,4]
</pre>

<h5>Example 2:</h5>
Input: nums = [-1,-100,3,99], k = 2
Output: [3,99,-1,-100]
Explanation: 
rotate 1 steps to the right: [99,-1,-100,3]
rotate 2 steps to the right: [3,99,-1,-100]
</pre>

<h5>Constraints:</h5>
<ul>
<li>1 <= nums.length <= 10<sup>5</sup></li>
<li>-2<sup>31</sup> <= nums[i] <= 2<sup>31</sup> - 1</li>
<li>0 <= k <= 10<sup>5</sup></li>
</ul>

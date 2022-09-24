<?php
$page = 'purchase';
include 'logged_in_header.php'
?>

<!-- Purchase page of user -->
<div class="text-justify p-0 m-0 ml-4 course-info">
  <div class=" col-sm-auto text-justify p-0 m-0 m-3" id="purchase">
    <p class="h5 text-dark font-weight-bold">Purchase History</p>
    <div class="table-responsive">
      <table class="table table-hover table-sm">
        <thead class="thead-light">
          <tr>
            <th>ID</th>
            <th>Courses</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>#2223</td>
            <td>Excel VBA for Civil Engineers and students</td>
            <td>NPR500</td>
            <td><span class="bg-danger rounded-2 text-light p-1">Cancelled</span></td>
            <td>July 30, 2022 </td>
          </tr>
          <tr>
            <td>#1743</td>
            <td>Municipal Drawing using AutoCAD</td>
            <td>NPR5000</td>
            <td><span class="bg-success rounded-2 text-light p-1">Completed</span></td>
            <td>December 10, 2021</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

</main>
</div>
</div>

<?php
include 'footer.php'
?>
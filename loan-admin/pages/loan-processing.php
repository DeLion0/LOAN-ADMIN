<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Review Loan Application</title>

  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/loan-processing.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>

<div class="layout">

  <?php include "../index.php"; ?>

  <main class="main">
    <header class="topbar">
      <h2>Review Loan Application</h2>
      <input type="search" placeholder="Search...">
      <span class="status-badge pending">PENDING</span>
    </header>

    <section class="content">
      <div class="cards">

        <div class="card full-width">
          <h3>Loan Application Summary</h3>
          <p>Application ID: #LA-1023</p>
          <p>Date Submitted: Aug 20, 2025</p>
          <p>Loan Type: Personal Loan</p>
          <p>Requested Amount: ₱50,000</p>
          <p>Loan Term: 12 months</p>
        </div>

        <div class="card">
          <h3>Applicant Information</h3>
          <p>Full Name: Juan Dela Cruz</p>
          <p>Address: Manila</p>
          <p>Contact Number: 09XXXXXXXXX</p>
          <p>Email: sample@email.com</p>
          <p>Employment Status: Employed</p>
          <p>Monthly Income: ₱25,000</p>
        </div>

        <div class="card">
          <h3>Loan Details</h3>
          <p>Purpose: Business Capital</p>
          <p>Payment Method: Monthly</p>
          <p>Interest Rate: 5%</p>
          <p>Estimated Monthly Payment: ₱4,500</p>
        </div>

      </div>

      <div class="action-buttons">
        <button class="approve">✔ Approve</button>
        <button class="reject">✖ Reject</button>
        <button class="back">← Back</button>
      </div>
    </section>
  </main>
</div>

<script src="../assets/js/sidebar.js"></script>
</body>
</html>

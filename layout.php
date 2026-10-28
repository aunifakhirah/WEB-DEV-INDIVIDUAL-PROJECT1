<!--
Matric Number: A218567
Name: Nur Auni Fakhirah binti Mohd Fakrurazi
Project 1: Workout Plan PDFs Back-Office System
-->

<?php require_once 'header.php'; ?>

<?php require_once 'sidebar.php'; ?>
 
      <!-- Content Area Section -->
      <div class="col bg-light">
        <!-- Mobile Header with Burger -->
        <div id="myBurger" class="p-3 d-lg-none text-white bg-dark">
          <div class="row">
            <a href="#" class="text-white text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#mySidebar">
              <i class="bi bi-list"></i><h5 class="ms-3 d-inline">FITLYs</h5>
            </a>
          </div>
        </div>
         
        <div class="p-4">
                    <?= $content ?? '' ?>
                </div>
            </div>

<?php require_once 'footer.php'; ?>

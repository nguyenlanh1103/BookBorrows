<div class="pagination d-flex justify-content-center clearfix mt-4 mb-3">
<?php 
    // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
   if ($current_page > 1 && $total_page > 1){
       echo '<li class="page-item"><a class="page-link rounded-0 text-center" href="BookLoanPage.php?page='.($current_page-1).'">Prev</a></li> ';
   }
   
   // Lặp khoảng giữa
   for ($i = 1; $i <= $total_page; $i++){
       // Nếu là trang hiện tại thì hiển thị thẻ span
       // ngược lại hiển thị thẻ a
       if ($i == $current_page){
           echo '<li class="page-item"><a class="page-link rounded-0 text-center" >'.$i.'</a></li>  ';
       }
       else{
           echo '<li class="page-item"><a class="page-link rounded-0 text-center" href="BookLoanPage.php?page='.$i.'">'.$i.'</a></li> ';
       }
   }
//    nếu current_page < $total_page và total_page > 1 mới hiển thị nút Next
   if ($current_page < $total_page && $total_page > 1){
       echo '<li class="page-item"><a class="page-link rounded-0 text-center" href="BookLoanPage.php?page='.($current_page+1).'">Next</a></li> ';
   }
   ?>
</div>


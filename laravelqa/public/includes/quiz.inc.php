  <div class="flex-container">
    <form action="" method="POST">
      <div name="question" class="question">
      <?php
          $id_count = 1;
          
          $sql = "SELECT * FROM quiz WHERE id=$id_count";
          foreach ($pdo->query($sql) as $row) {
            print $row['question'] . "\n";
          }

          var_dump(($pdo->query($sql)));
        ?>
      </div>
      <input type="text" name="answer" class="answer" autofocus>
      <button class="submit" type="submit">execute</button>
    </form>
  </div>
<script src="resources/submit.js" type="text/javascript"> 
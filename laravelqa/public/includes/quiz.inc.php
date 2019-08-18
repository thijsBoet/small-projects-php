  <div class="flex-container">
    <form action="" method="POST">
      <div name="question" class="question">
      <?php
          $id = $question = $answer = null;

          $sql = "SELECT id, question, answer FROM quiz";
          $stmt = $pdo->prepare($sql);
          $stmt->execute(['id'=>$id, 'question'=>$question, 'answer'=>$answer]);
          $quiz = $stmt->fetchAll();

          foreach($quiz as $q){
            echo $q->question . "<br>";
          }

          $_SESSION["question_id"] = 1;
          $_SESSION["score"] = 0;

          
        ?>
      </div>
      <input type="text" name="answer" class="answer" autofocus>
      <button class="submit" type="submit">execute</button>
    </form>
  </div>
<script src="resources/submit.js" type="text/javascript"> 
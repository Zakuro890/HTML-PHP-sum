<html>
  <head>
    <title>PHPを使った四則演算プログラム</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        padding: 20px;
      }
      
      h1 {
        color: #333;
      }
      
      form {
        margin-bottom: 20px;
      }
      
      label {
        display: block;
        margin-bottom: 5px;
      }
      
      input[type="number"] {
        width: 200px;
        padding: 5px;
      }
      
      select {
        width: 200px;
        padding: 5px;
      }
      
      button[type="submit"] {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        cursor: pointer;
      }
      
      p {
        margin-top: 10px;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <h1>四則演算プログラム</h1>
    <form method="POST">
      <label for="num1">値1を入力してください:</label>
      <input type="number" name="num1" id="num1" required>
      <br>
      <label for="num2">値2を入力してください:</label>
      <input type="number" name="num2" id="num2" required>
      <br>
      <label for="operation">演算子を選択してください:</label>
      <select name="operation" id="operation">
        <option value="addition">+</option>
        <option value="subtraction">-</option>
        <option value="multiplication">*</option>
        <option value="division">/</option>
      </select>
      <br>
      <button type="submit">計算</button>
    </form>
    <?php if(isset($result)): ?>
    <p>結果: <?php echo $result; ?></p>
    <?php endif; ?>
  </body>
</html>

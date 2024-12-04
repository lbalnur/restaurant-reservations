<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AiAru Style Restaurant</title>
  <link rel="stylesheet" href="weeb.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
  
 <header class="header">
  <div class="container">
    <div class="logo">
      <h1>ABA Lounge</h1>
    </div>
    <div class="info">
      <p>г. Алматы<br>Аль-Фараби 567</p>
    </div>
    <div class="working-hours">
      <p>Вс - Чт 12:00 - 01:00<br>Пт - Сб 12:00 - 02:00</p>
    </div>
    <div class="contact">
      <p>+7 (777) 555 55 55</p>
    </div>
         
  </div>
</header>
  <main class="main">
    <div class="background">
      <div class="content">
        <h2>ABA Lounge - Ресторан Грузинской кухни в Алматы</h2>
        <p>Грузинская кухня | Живая музыка | Караоке</p>
        <a href="#reservation" class="button">ЗАБРОНИРОВАТЬ</a>
      </div>
    </div>
  </main>
  <footer id="reservation" class="footer">
    <h3>Брондау</h3>
    <form>
      <label for="name">Атыңыз:</label>
      <input type="text" id="name" name="name" placeholder="Толық аты-жөніңіз" required>
      
      <label for="phone">Телефон:</label>
      <input type="tel" id="phone" name="phone" placeholder="+7 (_) ___ __ __" required>
      
      <label for="date">Күні:</label>
      <input type="date" id="date" name="date" required>
      
      <label for="time">Уақыты:</label>
      <input type="time" id="time" name="time" required>
      
      <button type="submit" class="button">Жіберу</button>
    </form>
  </footer>
</body>
</html>
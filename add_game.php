<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>raquty</title>
</head>
<style>
  @charset "utf-8";

  * {
    box-sizing: border-box;
  }

  html {
    font-size: 15px;
  }

  body {
    font-family: "Helvetica Neue", Arial, "Hiragino Kaku Gothic ProN", Meiryo, sans-serif;
  }

  .main {
    background-color: #f5f0f0;
    border: 1px solid lightgray;
    text-align: center;
    border-radius: 0.26rem;
    padding: 0.7rem;
    margin-left: 1%;
    width: 80%;
    height: 46rem;
  }

  h1 {
    font-size: 1.75rem;
    margin: 1rem 0 0;
  }

  h2 {
    font-size: 1.5rem;
    margin: 3rem 0 5rem;
  }

  h3 {
    font-size: 1.5rem;
    margin: 5rem 0 3rem;
  }

  p {
    margin: 1rem 0 0;
  }

  .vs {
    font-size: 1.5rem;
    font-weight: bold;
    margin: 5.5rem 0 0;
  }

  article {
    display: flex;
  }

  .side {
    background-color: #c3bfbf;
    border: 1px solid lightgray;
    text-align: center;
    width: 250vw;
    height: 300vw;
    border-radius: 0.26rem;
    padding: 0.5rem;
    width: 20%;
    height: 46rem;
  }

  .main__player {
    display: flex;
    text-align: center;
    justify-content: space-evenly;
  }

  .main__center {
    display: block;
  }

  .main__round {
    display: inline-flex;
    align-items: center;
    position: relative;
    margin: 6.5rem 0 5.5rem;
  }

  .main__round::after {
      position: absolute;
      right: 1rem;
      width: 0.6rem;
      height: 0.46rem;
      background-color: #535353;
      clip-path: polygon(0 0, 100% 0, 50% 100%);
      content: '';
      pointer-events: none;
  }

  .main__round select {
      appearance: none;
      min-width: 5rem;
      height: 2rem;
      padding: .4rem calc(.8rem + 2rem) .4rem .8rem;
      border: 1px solid #cccccc;
      border-radius: 0.2rem;
      background-color: #fff;
      color: #333333;
      font-size: 1rem;
      cursor: pointer;
  }

  .main__select {
    display: inline-flex;
    align-items: center;
    position: relative;
  }

  .main__select::after {
      position: absolute;
      right: 1rem;
      width: 0.6rem;
      height: 0.46rem;
      background-color: #535353;
      clip-path: polygon(0 0, 100% 0, 50% 100%);
      content: '';
      pointer-events: none;
  }

  .main__select select {
      appearance: none;
      min-width: 5rem;
      height: 2rem;
      padding: .4rem calc(.8rem + 2rem) .4rem .8rem;
      border: 1px solid #cccccc;
      border-radius: 0.2rem;
      background-color: #fff;
      color: #333333;
      font-size: 1rem;
      cursor: pointer;
  }

  .main__button {
    margin: 5rem 0 0;
  }

  .main__button a {
    background: white;
    border-radius: 3.3rem;
    border: 0.06rem solid #313131;
    position: relative;
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin: 0 auto;
    max-width: 17rem;
    padding: 0.6rem 1.6rem;
    color: #313131;
    transition: 0.3s ease-in-out;
    font-weight: 500;
  }

  .main__button a:hover {
      background: #313131;
      color: #FFF;
  }

  .main__button a:after {
      content: '';
      width: 0.3rem;
      height: 0.3rem;
      border-top: 0.2rem solid #313131;
      border-right: 0.2rem solid #313131;
      transform: rotate(45deg) translateY(-50%);
      position: absolute;
      top: 50%;
      right: 1.3rem;
      border-radius: 0.06rem;
      transition: 0.3s ease-in-out;
  }

  .main__button a:hover:after {
      border-color: #FFF;
  }
</style>

<body>
  <header>
    <div class="header__title">
      <a href="https://raquty.com/">
        <img src="raquty.png" width="160" height="64">
      </a>
    </div>
  </header>
  <main>
    <article>
      <div class="side">
        <div class="side__inner__title">
          <h1>次の試合一覧</h1>
        </div>
      </div>
      <div class="main">
        <div class="main__title">
          <h1>試合追加</h1>
        </div>
        <div class="main__player">
          <div class="main__player1">
            <h2>選手1</h2>
            <div class="main__school">
              <?php
              $query = "SELECT * FROM test_table";
              $result = $pdo->query($query);
              $players = $pdo->query($query);
              ?>
              <h3>学校名</h3>
              <label class="main__select">
                <select name="school__name">
                  <option>学校名を選択してください</option>
                  <?php
                  foreach ($result as $row) {
                    echo '<option value="' . $row['id'] . '">' . $row['school'] . '</option>';
                  }
                  ?>
                </select>
              </label>
            </div>
            <div class="main__name">
              <h3>選手名</h3>
              <label class="main__select">
                <select name="player__name">
                  <option>選手名を選択してください</option>
                  <?php
                  foreach ($players as $row) {
                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                  }
                  ?>
                </select>
              </label>
            </div>
          </div>
          <div class="main__center">
            <label class="main__round">
              <select>
                <option>1回戦</option>
                <option>2回戦</option>
                <option>3回戦</option>
                <option>準々決勝</option>
                <option>準決勝</option>
                <option>決勝</option>
              </select>
            </label>
            <div class="vs">VS</div>
          </div>
          <div class="main__player2">
            <h2>選手2</h2>
            <div class="main__school">
              <?php
              $query = "SELECT * FROM test_table";
              $result = $pdo->query($query);
              $players = $pdo->query($query);
              ?>
              <h3>学校名</h3>
              <label class="main__select">
                <select name="school__name">
                  <option>学校名を選択してください</option>
                  <?php
                  foreach ($result as $row) {
                    echo '<option value="' . $row['id'] . '">' . $row['school'] . '</option>';
                  }
                  ?>
                </select>
              </label>
            </div>
            <div class="main__name">
              <h3>選手名</h3>
              <label class="main__select">
                <select name="player__name">
                  <option>選手名を選択してください</option>
                  <?php
                  foreach ($players as $row) {
                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                  }
                  ?>
                </select>
              </label>
            </div>
          </div>
        </div>
        <div class="main__button">
          <a href="#">試合を追加</a>
        </div>
      </div>
    </article>
  </main>
  <footer>
    <div class="footer__inner">
      <div class="footer__inner__content">
        <p>© 2023 raquty</p>
      </div>
    </div>
  </footer>
</body>

</html>
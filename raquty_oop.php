<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>オーダーオブプレイ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="oop.css">
</head>
<body>
    <header>
        <div class="header">
            <a href="https://raquty.com/">
                <img src="raquty.png" width="160" height="64">
            </a>
        </div>
        <a href="#" class="slide_button"></a>
        <input id="r_sidebar" class="r_sidebar_button" type="checkbox">
        <label class="r_sidebar_label" for="r_sidebar"></label>
        <div class="r_sidebar_menu">
            ここにサイドバーの内容を書く
        </div>
    </header>

    <main>
    <div id="main__contents" class="main">
      <div class="main__inner">
        <ul class="main__inner__before">
          <li class="court">
            <div class="court-title">
              <h3>1</h3>
            </div>
            <div class="court-player court-player1" data-player-number="1">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back1" data-player-number="1">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-plus" data-player-number="2">
              <span class="dli-plus"></span>
            </div>
            <div class="back court-plus" data-player-number="2">
              <span class="dli-plus"></span>
            </div>

            <div class="court-player court-player3" data-player-number="3">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back3" data-player-number="3">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>
          </li>

          <li class="court">
            <div class="court-title">
              <h3>2</h3>
            </div>
            <div class="court-player court-player1" data-player-number="1">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back1" data-player-number="1">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-player2" data-player-number="2">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back2" data-player-number="2">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-player3" data-player-number="3">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back3" data-player-number="3">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>
          </li>

          <li class="court">
            <div class="court-title">
              <h3>3</h3>
            </div>
            <div class="court-player court-player1" data-player-number="1">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back1" data-player-number="1">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-player2" data-player-number="2">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back2" data-player-number="2">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-player3" data-player-number="3">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back3" data-player-number="3">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>
          </li>

          <li class="court">
            <div class="court-title">
              <h3>4</h3>
            </div>
            <div class="court-player court-player1" data-player-number="1">    
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back1" data-player-number="1">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-player2" data-player-number="2">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back2" data-player-number="2">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-player3" data-player-number="3">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back3" data-player-number="3">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>
          </li>

          <li class="court-right">
            <div class="court-title">
              <h3>5</h3>
            </div>
            <div class="court-player court-player1" data-player-number="1">
                <div>
                  <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                  <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back1" data-player-number="1">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-player2" data-player-number="2">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back2" data-player-number="2">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-player3" data-player-number="3">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back3" data-player-number="3">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>
          </li>
        </ul>

        <ul class="main__inner__after">
          <li class="court">
            <div class="court-title">
              <h3>6</h3>
            </div>
            <div class="court-player court-player1" data-player-number="1">
              <div>
                <div class="dragged-place">選手を追加</div>
              </div>
              <p>VS</p>
              <div>
                <div class="dragged-place">選手を追加</div>
              </div>
            </div>
            <div class="back back1" data-player-number="1">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-player2" data-player-number="2">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back2" data-player-number="2">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-player3" data-player-number="3">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back3" data-player-number="3">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>
          </li>

          <li class="court">
            <div class="court-title">
              <h3>7</h3>
            </div>
            <div class="court-player court-player1" data-player-number="1">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back1" data-player-number="1">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-player2" data-player-number="2">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back2" data-player-number="2">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-player3" data-player-number="3">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back3" data-player-number="3">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>
          </li>

          <li class="court">
            <div class="court-title">
              <h3>8</h3>
            </div>
            <div class="court-player court-player1" data-player-number="1">
              <div>
                  <div class="dragged-place">選手を追加</div>
              </div>
              <p>VS</p>
              <div>
                  <div class="dragged-place">選手を追加</div>
              </div>
            </div>
            <div class="back back1" data-player-number="1">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-player2" data-player-number="2">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back2" data-player-number="2">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-player3" data-player-number="3">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back3" data-player-number="3">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>
          </li>

          <li class="court">
            <div class="court-title">
              <h3>9</h3>
            </div>
            <div class="court-player court-player1" data-player-number="1">
              <div>
                  <div class="dragged-place">選手を追加</div>
              </div>
              <p>VS</p>
              <div>
                  <div class="dragged-place">選手を追加</div>
              </div>
            </div>
            <div class="back back1" data-player-number="1">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-player2" data-player-number="2">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back2" data-player-number="2">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-player3" data-player-number="3">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back3" data-player-number="3">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>
          </li>

          <li class="court-right">
            <div class="court-title">
              <h3>10</h3>
            </div>
            <div class="court-player court-player1" data-player-number="1">
              <div>
                  <div class="dragged-place">選手を追加</div>
              </div>
              <p>VS</p>
              <div>
                  <div class="dragged-place">選手を追加</div>
              </div>
            </div>
            <div class="back back1" data-player-number="1">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-player2" data-player-number="2">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back2" data-player-number="2">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>

            <div class="court-player court-player3" data-player-number="3">
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
                <p>VS</p>
                <div>
                    <div class="dragged-place">選手を追加</div>
                </div>
            </div>
            <div class="back back3" data-player-number="3">
              <button class="back-button">結果入力</button>
              <button class="back-button">試合消去</button>
            </div>
          </li>
        </ul>
      </div>

      <!-- ここから試合追加モーダル -->
      <div id="mask" class="hidden"></div>
      <div id="main__add" class="hidden">
        <span id="close">&times;</span>
        <div class="main__title">
          <h1>試合追加</h1>
        </div>
        <div class="main__player">
          <div class="main__player1">
            <h2>選手1</h2>
            <div class="main__school">
              <div class="add__name">学校名</div>
              <label class="main__select">
                <select name="school__name">
                  <option>学校名を選択してください</option>
                </select>
              </label>
            </div>
            <div class="main__name">
              <div class="add__name">選手名</div>
              <label class="main__select">
                <select name="player__name">
                  <option>選手名を選択してください</option>
                </select>
              </label>
            </div>
          </div>
          <div class="main__center">
            <div class="main__court__select">
              <select>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select>
            </div>
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
              <div class="add__name">学校名</div>
              <label class="main__select">
                <select name="school__name">
                  <option>学校名を選択してください</option>
                </select>
              </label>
            </div>
            <div class="main__name">
              <div class="add__name">選手名</div>
              <label class="main__select">
                <select name="player__name">
                  <option>選手名を選択してください</option>
                </select>
              </label>
            </div>
          </div>
        </div>
        <div class="main__button">
          <a href="#">試合を追加</a>
        </div>
      </div>
    <!-- ここまで試合追加モーダル -->
    </div>
    </main>
  <script src="oop.js"></script>
</body>
</html>
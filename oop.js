        const rSidebarCheckbox = document.getElementById('r_sidebar');
        const mainContent = document.querySelector('main');

        rSidebarCheckbox.addEventListener('change', () => {
            if (rSidebarCheckbox.checked) {
                mainContent.style.width = `calc(100% - 300px)`;
            } else {
                mainContent.style.width = `100%`;
            }
        });

        // court-player要素をクリックした際の処理を定義する関数
        function rotateElement(event) {
          const element = event.currentTarget;

          // クリックされた要素の親要素を取得
          const parent = element.closest('.court, .court-right');

          if (parent.classList.contains('court') || parent.classList.contains('court-right')) {
              // court-player要素とback要素の表示を切り替える
              const playerNumber = element.dataset.playerNumber; // playerNumber属性を取得
              const backElement = parent.querySelector(`.back[data-player-number="${playerNumber}"]`);

              element.style.display = 'none';
              backElement.style.display = 'block';
          }
        }

        // back要素をクリックした際の処理を定義する関数
        function rotateBackElement(event) {
          const element = event.currentTarget;

          // クリックされた要素の親要素を取得
          const parent = element.closest('.court, .court-right');

          if (parent.classList.contains('court') || parent.classList.contains('court-right')) {
              // court-player要素とback要素の表示を切り替える
              const playerNumber = element.dataset.playerNumber; // playerNumber属性を取得
              const courtElement = parent.querySelector(`.court-player[data-player-number="${playerNumber}"]`);

              element.style.display = 'none';
              courtElement.style.display = 'block';
          }
        }

        // court-player要素にクリックイベントリスナーを追加
        const courtPlayers = document.querySelectorAll('.court-player, .court-right .court-player');
        courtPlayers.forEach((courtPlayer) => {
          courtPlayer.addEventListener('click', rotateElement);
        });

        // back要素にクリックイベントリスナーを追加
        const backElements = document.querySelectorAll('.back, .court-right .back');
        backElements.forEach((backElement) => {
          backElement.addEventListener('click', rotateBackElement);
        });

        // 下矢印ボタンをクリックした際の処理を定義する関数
        const slideButton = document.querySelector('.slide_button');
        const courtPlayers2 = document.querySelectorAll('.court-player2');
        const courtPlayers3 = document.querySelectorAll('.court-player3');

        let isFlipped = false;

        slideButton.addEventListener('click', () => {
          isFlipped = !isFlipped;

          if (isFlipped) {
            slideButton.style.transform = 'rotate(-45deg) scaleY(-1)'; // 上下反転
          } else {
            slideButton.style.transform = 'rotate(45deg) scaleY(1)'; // 元に戻す
          }
          toggleVisibility(courtPlayers2);
          toggleVisibility(courtPlayers3);
        });

        toggleVisibility = (elements) => {
          elements.forEach(element => {
            if (element.style.display === 'none' || element.style.display === '') {
              element.style.display = 'block';
            } else {
              element.style.display = 'none';
            }
          });
        }
        
        // チェックボックスをクリックした際の処理を定義する関数
        const rSidebarCheckbox = document.getElementById('r_sidebar');
        const mainContent = document.querySelector('main');
        const mainAdd = document.getElementById('main__add');
        const resultAdd = document.getElementById('result__add');
        const mainRemove = document.getElementById('main__remove');

        rSidebarCheckbox.addEventListener('change', () => {
            if (rSidebarCheckbox.checked) {
                mainContent.style.width = `calc(100% - 20rem)`;
                mainAdd.style.width = `calc(82% - 20rem)`;
                mainAdd.style.translate = `-10rem`;
                resultAdd.style.width = `calc(82% - 20rem)`;
                resultAdd.style.translate = `-10rem`;
                mainRemove.style.width = `calc(82% - 20rem)`;
                mainRemove.style.translate = `-10rem`;
            } else {
                mainContent.style.width = `100%`;
                mainAdd.style.width = `82%`;
                mainAdd.style.translate = `0`;
                resultAdd.style.width = `82%`;
                resultAdd.style.translate = `0`;
                mainRemove.style.width = `82%`;
                mainRemove.style.translate = `0`;
            }
        });

        // court-player要素をクリックした際の処理を定義する関数
        rotateElement = (event) => {
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
        rotateBackElement = (event) => {
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

        // 試合追加モーダル部分の処理
        const courtPlus = document.querySelectorAll('.court-plus');
        const close = document.getElementById('close');
        const mask = document.getElementById('mask');
        
        courtPlus.forEach((courtPlus) => {
          courtPlus.addEventListener('click', () => {
            mainAdd.classList.remove('hidden');
            mask.classList.remove('hidden');
          });
        });

        close.addEventListener('click', () => {
          mainAdd.classList.add('hidden');
          mask.classList.add('hidden');
        });

        mask.addEventListener('click', () => {
          mainAdd.classList.add('hidden');
          mask.classList.add('hidden');
        });

        // 結果入力モーダル部分の処理
        const resultButton = document.querySelectorAll('.result-button');
        const close2 = document.getElementById('close2');
        const mask2 = document.getElementById('mask2');
        
        resultButton.forEach((resultBtn) => {
          resultBtn.addEventListener('click', () => {
            resultAdd.classList.remove('hidden');
            mask2.classList.remove('hidden');
          });
        });

        close2.addEventListener('click', () => {
          resultAdd.classList.add('hidden');
          mask2.classList.add('hidden');
        });

        mask2.addEventListener('click', () => {
          resultAdd.classList.add('hidden');
          mask2.classList.add('hidden');
        });

        // 試合消去モーダル部分の処理
        const removeButton = document.querySelectorAll('.remove-button');
        const close3 = document.getElementById('close3');
        const mask3 = document.getElementById('mask3');
        
        removeButton.forEach((removeBtn) => {
          removeBtn.addEventListener('click', () => {
            mainRemove.classList.remove('hidden');
            mask3.classList.remove('hidden');
          });
        });

        close3.addEventListener('click', () => {
          mainRemove.classList.add('hidden');
          mask3.classList.add('hidden');
        });

        mask3.addEventListener('click', () => {
          mainRemove.classList.add('hidden');
          mask3.classList.add('hidden');
        });

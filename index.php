<?php







?>
<!DOCTYPE html>
<html lang="ja">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <title>imagemodal</title>
     <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
     <button id="prev">前へ</button>
     <button id="next">次へ</button>
     <button id="get">GET</button>
     <button id="post">POST</button>
     <div id="content">こんにちは</div>
     <div id="content2" class="hidden">
          <div id="div_id" class="human"></div>
          <div id="div_name" class="human"></div>
          <div id="div_age" class="human"></div>
     </div>

     <div id="img">画像に変更</div>
     <div class="top_contents" id="top_contents">
          <img src="" id="top_image" data-image="0">
          <div class="contents_wrapper flex-container" id="contents_wrapper">

          </div>
     </div>
     <script>
     window.onload = getItems();
     function getItems() {
          // console.log('test')
          $.ajax({
               type: 'GET', // HTTPリクエストメソッドの指定
               url: 'get.php', // 送信先URLの指定
               async: true, // 非同期通信フラグの指定
               dataType: 'json', // 受信するデータタイプの指定
          })
               .done(function (data) {
                    // 通信が成功したときの処理
                         // console.log(data);
                         const top_contents = document.getElementById('top_contents');
                         const contents_wrapper = document.getElementById('contents_wrapper');
                         const top_image = document.getElementById('top_image');
                              data.forEach(function(a) {
                                   // console.log(a['src'])
                                   const div_contents = document.createElement('div');
                                   const img = document.createElement('img');
                                   div_contents.classList.add('contents')
                                   div_contents.classList.add('flex-item')
                                   // div_contents.id = 'contents'
                                   div_contents.append(img)
                                   contents_wrapper.append(div_contents)
                                   img.setAttribute('src',a['src']);
                                   // console.log(a['src'])
                                   console.log(div_contents)

                              })

                         // img.setAttribute('src',data[0]['src'])
                         // const src = img.setAttribute('src');
                              // data.forEach(function(a) {
                              //      // 要素作成
                                   // const div_contents_wrapper = document.createElement('div');
                                   // const div_contents_id = document.createElement('id');
                                   // div_contents_id.setAttribute("id","contents")
                                   // console.log(div_contents_id)
                              //      // class属性追加
                              //      div_contents_wrapper.classList.add('contents_wrapper')
                                   // div_contents.classList.add('contents')
                              //      // 子要素へ追加
                              //      div_contents_wrapper.appendChild(div_contents);
                                   // div_contents.append(img);
                                   // top_contents.append(div_contents);
                                   // console.log(data)
                                   // console.log(data[0]["id"])
                                   data.forEach(function(a) {
                                        // console.log(a)
                                        // div_contents.classList.add('contents')
                                        // div_contents.append(img);
                                        // img.setAttribute("id","")
                                        // img.setAttribute("src","")
                                        // console.log(div_contents)
                                        // const get_img = div_contents.getElementsByTagName('img')
                                        // console.log(get_img)
                                        // console.log(a["id"])
                                        // console.log(a["src"])
                                        // img.setAttribute("data_image",a["id"])
                                        // img.setAttribute("id",a["id"])
                                        // img.setAttribute("class","thumbnail")
                                        // console.log(img)
                                        // トップの子要素として追加
                              })
               })
               .fail(function () {
                    // 通信が失敗したときの処理
                    console.log('b')
               })
               .always(function () {
                    // 通信が完了したときの処理
                    // console.log('c')
               })
     }

          const modal = document.querySelectorAll('.thumbnail');
          const prev = document.getElementById('prev');
          const next = document.getElementById('next');
          const modal_content = document.querySelectorAll('.modal_contents');
          // console.log(modal_content[3])

          modal.forEach(function (thumbnail) {
               thumbnail.addEventListener('click', function () {
                    top_image.src = this.src
                    top_image.dataset.image = this.dataset.image
               })
          })

          // 次へボタン
          next.addEventListener('click', function () {
               let num = parseInt(top_image.dataset.image)
               num++;
               top_image.dataset.image = num
               let next_content = modal[top_image.dataset.image - 1]
               top_image.src = next_content.src
          })
          // 前へ
          prev.addEventListener('click', function () {
               let prev_content = parseInt(top_image.dataset.image)
               console.log(prev_content)
          })


          const get = document.getElementById('get')
               get.addEventListener('click', function () {
                    $.ajax({
                         type: 'GET', // HTTPリクエストメソッドの指定
                         url: 'get.php', // 送信先URLの指定
                         async: true, // 非同期通信フラグの指定
                         dataType: 'json', // 受信するデータタイプの指定
                    })
                         .done(function (data) {
                              // 通信が成功したときの処理
                              console.log(data)

                         })
                         .fail(function () {
                              // 通信が失敗したときの処理
                              console.log('b')
                         })
                         .always(function () {
                              // 通信が完了したときの処理
                              // console.log('c')
                         })
               })
          // 非同期get
          // const get = document.getElementById('get')
          // get.addEventListener('click', function () {
          //      $.ajax({
          //           type: 'GET', // HTTPリクエストメソッドの指定
          //           url: 'get.php', // 送信先URLの指定
          //           async: true, // 非同期通信フラグの指定
          //           dataType: 'json', // 受信するデータタイプの指定
          //           data: {
          //                name: 'pettis',
          //                age: 26
          //           }
          //      })
          //           .done(function (data) {
          //                // 通信が成功したときの処理
          //                console.log(data)
          //                let content = document.getElementById('content')
          //                let content2 = document.getElementById('content2')
          //                let div_id = document.getElementById('div_id')
          //                let div_name = document.getElementById('div_name')
          //                let div_age = document.getElementById('div_age')
          //                let img = document.getElementById('img')

          //                div_id.innerHTML = data['id'];
          //                div_name.innerHTML = data['name'];
          //                div_age.innerHTML = data['age'];
          //                console.log(div_id)
          //                console.log(div_name)
          //                console.log(div_age)
          //                content.classList.add('hidden');
          //                content2.classList.remove('hidden');

          //           })
          //           .fail(function () {
          //                // 通信が失敗したときの処理
          //                console.log('b')
          //           })
          //           .always(function () {
          //                // 通信が完了したときの処理
          //                // console.log('c')
          //           })
          // })

// 課題
// カルーセルを完成させる
// 前へ次へボタンを完成
// アップロードフォームを作成
// ajaxpost
// 画像4れつキープ
// １postをajax化

          // 非同期post
          // const post_button = document.getElementById('post')
          // post_button.addEventListener('click', function () {
          //      // XHRの宣言
          //      const XHR = new XMLHttpRequest();
          //      // openメソッドにPOSTを指定して送信先のURLを指定
          //      XHR.open("POST", "post.php", true);
          //      //リクエストに従って正しいヘッダー情報を送信してください
          //      XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
          //      // レスポンスをjsonに設定（responseTextではなくresponseで取得）
          //      XHR.responseType = 'json';
          //      // サーバの応答をonreadystatechangeイベントで検出して正常終了したらデータを取得する
          //      XHR.onreadystatechange = function () {
          //           if (XHR.readyState == 4 && XHR.status == 200) {
          //                // POST送信した結果を表示する
          //                img.classList.add('hidden');
          //                top_image.src = XHR.response.img
          //                // console.log(XHR.response.img)
          //                // console.log(top_image)
          //                // content.innerHTML = XHR.responseText;
          //                // console.log(content.innerHTML)
          //                // console.log(XHR.responseXML)
          //                // console.log(content.innerHTML)
          //                // console.log(XHR)
          //                // console.log(image)
          //                // console.log(content)
          //           }
          //      };
          //      XHR.send("img=img/pien3.jpg");
          // })
          // 非同期post
               const post_button = document.getElementById('post')
               post_button.addEventListener('click', function () {
                    // XHRの宣言
                    // const data = { img: 'img/pien3.jpg', name: 'ペティス' };
                    const XHR = new XMLHttpRequest();
                    // openメソッドにPOSTを指定して送信先のURLを指定
                    XHR.open("POST", "post.php", true);
                    // let PostData = encodeURIComponent('img') + '=' + encodeURIComponent('img/pien3.jpg') + '&' + encodeURIComponent('name') + '=' + encodeURIComponent('ペティス');
                    // PostData = PostData.replace(/%20/g, '+');
                    //リクエストに従って正しいヘッダー情報を送信してください
                    XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    XHR.responseType = 'json';
                    // サーバの応答をonreadystatechangeイベントで検出して正常終了したらデータを取得する
                    XHR.onreadystatechange = function () {
                         if (XHR.readyState == 4 && XHR.status == 200) {
                              // POST送信した結果を表示する
                              console.log(XHR.response)
                              img.classList.add('hidden');
                              top_image.src = XHR.response.img
                              // console.log(top_image)
                              // content.innerHTML = XHR.responseText;
                              // console.log(content.innerHTML)
                              // console.log(XHR.responseXML)
                              // console.log(content.innerHTML)
                              // console.log(XHR)
                              // console.log(image)
                              // console.log(content)
                         }
                    };
                    XHR.send("img=img/pien3.jpg");
                    // XHR.send(PostData);
               })

     </script>
</body>
</html>

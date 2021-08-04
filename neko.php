<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>吾輩は猫である</title>
</head>
<!--
テキスト、
テキストエリア
ラじおボタン、
セレクトボックス、
チェックボックス、
ファイル
-->
<body>
<form method="post" action="backend.php" enctype="multipart/form-data">
    <!-- <div>
        <label for="name">名前</label>
        <input id="name" type="text" name="name" placeholder="ここにテキストを入力">
    </div> -->

    <!-- <div>
        <label>
            <input type="checkbox" name="fruits[]" value="apple">
            りんご
        </label>
        <label>
            <input type="checkbox" name="fruits[]" value="orange">
            みかん
        </label>
        <label>
            <input type="checkbox" name="fruits[]" value="peach">
            もも
        </label>
    </div> -->

    <!-- <div>
        <label>
            <input type="radio" name="ramen" value="醤油ラーメン">
            醤油ラーメン
        </label>
        <label>
            <input type="radio" name="ramen" value="塩ラーメン">
            塩ラーメン
        </label>
        <label>
            <input type="radio" name="ramen" value="味噌ラーメン">
            味噌ラーメン
        </label>
    </div> -->

     <!-- <div>
        <label>ファイル</label>
        <input type="file" name="file_name" accept="image/jpeg, image/png, image/gif" multiple>
    </div> -->

    <!-- <div>
        <label>レンジ</label>
        小
        <input type="range" name="speed" min="1" max="11">
        大
    </div> -->

    <div>
        <label>ナンバー</label>
        <input type="number" name="number" value="133">
    </div>

    <!-- <div>
        <label>デート</label>
        <input type="date" name="birthday">
    </div> -->

    <!-- <div>
        <label>タイム</label>
        <input type="time" name="alarm">
    </div> -->

    <!-- <div>
        <label>色</label>
        <input type="color" name="favorite_color">
    </div> -->

    <!-- <div>
        <label>テキストエリア</label>
        <textarea cols="30" rows="5" name="bikou">コメントをどうぞ</textarea>
    </div> -->

    <!-- <div>
        <label>セレクトボックス</label>
        <select name="age" size="3">
            <option selected="selected" value="none">該当するものをお選びください</option>
            <option value="10">10歳未満</option>
            <option value="20">20代</option>
            <option value="30">30代</option>
            <option value="over40" disabled="disabled">40歳以上</option>
        </select>
    </div> -->

    <button type="submit">送信</button>
</form>
</body>
</html>




$(".next_btn").on("click", function () {
    $("#q_p1").css("display", "none");
    id = $(this).attr("href");
    $(id).show();
    $(this).hide();
    $(".back_btn").show();

});

$(".back_btn").on("click", function () {
    $("#q_p2").css("display", "none");
    id = $(this).attr("href");
    $(id).show();
    $(this).hide();
    $(".next_btn").show();

});

$(".home").on("click", function () {
    $("#q_p1").show();
    $(".next_btn").show();
});




    // //選択ボタンデータを配列に入れてカウントする関数
    // var countA;
    // var countB;
    // var countC;
    // var box = [];
    // $(".btn").each(function () {
    //     $(this).on('click', function () {
    //         var value = $(this).data("value");
    //         box.push(value);

    //         countA = box.filter(function (x) {
    //             return x === "a"
    //         }).length;
    //         countB = box.filter(function (y) {
    //             return y === "b"
    //         }).length;
    //         countC = box.filter(function (z) {
    //             return z === "c"
    //         }).length;
    //     });
    // });


    // //結果を出力する関数
    // $('.end').on('click', function () {
    //     if (countA > countB) {
    //         $('#answer_01').css("display", ""); //回答1
    //     } else {
    //         if (countB > countC) {
    //             $('#answer_02').css("display", ""); //回答2
    //         } else {
    //             $('#answer_03').css("display", ""); //回答3
    //         }
    //     }
    // });
// });

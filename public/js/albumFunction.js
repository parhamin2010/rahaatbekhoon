$(function () {
    var AlbumID = document.getElementById("a_id_get").value;
    var userID = document.getElementById("userIdGet").value;

    $(".Fr-star.userChoose").Fr_star(function (rating) {
        if (userID == "") {
            generate('error', '<div class="activity-item">برای ثبت امتیاز می بایست ابتدا وارد حساب کاربری خود شوید.</div>');
        }
        else {
            $.post(
                "album/addRatingAjax",
                {
                    'user_id': userID,
                    'rate_id': AlbumID,
                    'rate': rating
                },
                function () {
                    generate('success', '<div class="activity-item">امتیاز شما باموفقیت ثبت شد.</div>');
                });
        }
    });

});

function gridView() {
    document.getElementById('sectionModeID').className = 'album-list-widget white user-profile mode-block';
    document.getElementById('tableView').className = 'switch table-switch';
    document.getElementById('gridView').className = 'switch block-switch selected';
}

function tableView() {
    document.getElementById('sectionModeID').className = 'album-list-widget white user-profile mode-table';
    document.getElementById('gridView').className = 'switch block-switch';
    document.getElementById('tableView').className = 'switch table-switch selected';
}

$("#btn-dl-128").on('click', function () {
    var quality = document.getElementById("btn-dl-128").getAttribute('data-quality');
    var type = document.getElementById("btn-dl-128").getAttribute('data-type');
    var pID = document.getElementById("btn-dl-128").getAttribute('data-id');

    $.post(
        "album/downloadAlbum?data="+Math.random(),
        {
            'a_id': pID,
            'type': type,
            'quality': quality
        },
        function (data) {
            if (data == "error") {
                generate('error', '<div class="activity-item">متاسفانه خطایی رخ داده است...<br/>لطفا مجددا تلاش نمایید.</div>');
            }
        });
});

$("#btn-dl-320").on('click', function () {
    var quality = document.getElementById("btn-dl-320").getAttribute('data-quality');
    var type = document.getElementById("btn-dl-320").getAttribute('data-type');
    var pID = document.getElementById("btn-dl-320").getAttribute('data-id');

    $.post(
        "album/downloadAlbum?data="+Math.random(),
        {
            'a_id': pID,
            'type': type,
            'quality': quality
        },
        function (data) {
            if (data == "error") {
                generate('error', '<div class="activity-item">متاسفانه خطایی رخ داده است...<br/>لطفا مجددا تلاش نمایید.</div>');
            }
        });
});

$("#btn-send-gift").on('click', function () {
    var nameTrack = document.getElementById("gift-name").getAttribute('data-title');
    var price = document.getElementById("gift-price").getAttribute('data-title');
    var name = document.getElementById("gift-receiver-name").value;
    var email = document.getElementById("gift-receiver-email").value;
    var message = document.getElementById("gift-receiver-message").value;
    var userID = document.getElementById("userIdGet").value;
    var type = document.getElementById("btn-dl-128").getAttribute('data-type');
    var pID = document.getElementById("btn-dl-128").getAttribute('data-id');
    if (email == "" && name == "") {
        generate('warning', '<div class="activity-item">لطفا تمامی فیلدهای دارای * را به صورت دقیق تکمیل کنید.</div>');
    }
    else {
        $.post(
            "album/sendGift",
            {
                'nameTrack': nameTrack,
                'price': price,
                'name': name,
                'email': email,
                'message': message,
                'pID': pID,
                'type': type,
                'userID': userID
            },
            function (data) {
                if (data == "ok") {
                    generate('success', '<div class="activity-item">هدیه شما باموفقیت برای مخاطب ارسال شد. :)</div>');
                    $('#myModal').modal('hide');
                }
                else {
                    generate('error', '<div class="activity-item">متاسفانه خطایی رخ داده است...<br/>لطفا مجددا تلاش نمایید.</div>');
                    $('#myModal').modal('hide');
                }
            }
        );
    }
});

$("#sendGift").on('click', function () {
    var userID = document.getElementById("userIdGet").value;
    var type = $("#addCartMusic").data('type');
    if (userID == "") {
        generate('error', '<div class="activity-item">برای ارسال هدیه می بایست ابتدا وارد حساب کاربری خود شوید.</div>');
    }else if (type == "10") {
        generate('warning', '<div class="activity-item">برای ارسال هدیه آلبوم اورجینال آن را به سبد خود اضافه و در قسمت آدرس، آدرس شخص مورد نظر را وارد نمایید.</div>');
    }
    else {
        $('#myModal').modal('show');
    }
});

$("#btn-send-comment").on('click', function () {
    var message = document.getElementById("InputComments").value;
    var AlbumID = document.getElementById("a_id_get").value;
    var userID = document.getElementById("userIdGet").value;
    if (message == "") {
        generate('warning', '<div class="activity-item">لطفا ابتدا نظر خود را نوشته و سپس اقدام به ارسال کنید.</div>');
    }
    else {
        $.post(
            "album/sendComment",
            {
                'ProductID': AlbumID,
                'message': message,
                'user_id': userID
            },
            function (data) {
                if (data == "ok") {
                    generate('success', '<div class="activity-item">نظر شما باموفقیت ثبت شد.</div>');
                    document.getElementById('InputComments').style.display = 'none';
                    document.getElementById('btn-send-comment').style.display = 'none';
                    document.getElementById('commentTitle').innerHTML = "نظر شما باموفقیت ثبت و پس از تایید در سایت قرار می گیرد.";
                }
                else {
                    generate('warning', '<div class="activity-item">نظر شما قبلا ثبت شده است.</div>');
                    $('#myModal').modal('hide');
                }
            }
        );
    }
});

$("#continueSellAlbum").on('click', function () {
    var target = $(this).data('target');

    $.post(
        "album/buyAlbum",
        {
            'a_id': target
        },
        function (data) {
            if (data == "error") {
                generate('error', '<div class="activity-item">متاسفانه خطایی رخ داده است...<br/>لطفا مجددا تلاش نمایید.</div>');
            }
            else if (data == "notcash") {
                generate('error', '<div class="activity-item">متاسفانه موجودی شما کافی نمی باشد.</div>');
                window.location = "vouchers";
            }
            else if (data == "ok") {
                generate('success', '<div class="activity-item">خرید باموفقیت انجام و هزینه از اعتبار شما کم شد.</div>');
                $('#myModalBuy').modal('hide');
                document.getElementById('buyMusic').innerHTML = "دانلود آهنگ";
                $('#buyMusic').attr('data-target', '#myModaldownload');
            }
            else {
                generate('error', '<div class="activity-item">متاسفانه خطایی رخ داده است...<br/>لطفا به پشتیبانی اطلاع دهید.</div>');
            }
        });
});

$("#add-favorite-btn").on('click', function () {
    favaoriteFunc();
});

$("#Bol-Player-Like").on('click', function () {
    favaoriteFunc();
});

function favaoriteFunc() {
    var AlbumID = document.getElementById("a_id_get").value;
    var userID = document.getElementById("userIdGet").value;

    if (userID == "") {
        generate('error', '<div class="activity-item">برای افزودن به لیست مورد علاقه می بایست وارد حساب کاربری خود شوید.</div>');
    }
    else {
        $.post(
            "album/Addtofavorite",
            {
                'product_id': AlbumID
            },
            function (data) {
                if (data == "add") {
                    generate('success', '<div class="activity-item">آلبوم مورد نظر باموفقیت به لیست موردعلاقه شما افزوده شد.</div>');
                    $("#Bol-Player-Like").html('<i class="fa fa-heart" aria-hidden="true"></i>');
                    $("#add-favorite-btn").html('<i class="fa fa-bookmark" aria-hidden="true"></i>');
                }
                else if (data == "delete") {
                    generate('warning', '<div class="activity-item">آلبوم مورد نظر باموفقیت از لیست موردعلاقه شما حذف شد.</div>');
                    $("#Bol-Player-Like").html('<i class="fa fa-heart-o" aria-hidden="true"></i>');
                    $("#add-favorite-btn").html('<i class="fa fa-bookmark-o" aria-hidden="true"></i>');
                }
                else {
                    generate('error', '<div class="activity-item">متاسفانه خطایی رخ داده است...<br/>لطفا مجددا تلاش نمایید.</div>');
                }
            });
    }
}
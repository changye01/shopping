$(document).ready(function () {
    var url = window.location.href;
    index = url.indexOf("addManagers");
    index1 = url.indexOf("editManagers");
    index2 = url.indexOf("listManagers");
    index3 = url.indexOf("addCate1");
    index4 = url.indexOf("listCates");
    index5 = url.indexOf("editCates");
    index6 = url.indexOf("addPros");
    index7 = url.indexOf("listPros");
    index8 = url.indexOf("editPros");
    index9 = url.indexOf("addUsers");
    index10 = url.indexOf("listUsers");
    index11=url.indexOf("editUsers");
    if (index != -1) {
        $.ajax({
            success: function () {
                $("#main").hide();
                $("#listManagers").hide();
                $("#editManagers").hide();
                $('#addManagers').show();
                $("$addCate1").hide();
                $("#listCates").hide();
                $("#editCates").hide();
                $("#addUsers").hide();
                $("#addPros").hide();
                $("#listPros").hide();
                $("#editPros").hide();
                $("#listUsers").hide();
                $("#editUsers").hide();
            }
        });
    }
    if (index1 != -1) {
        $.ajax({
            success: function () {
                $("#editManagers").show();
                $("#listManagers").hide();
                $("#addManagers").hide();
                $("#main").hide();
                $("$addCate1").hide();
                $("#listCates").hide();
                $("#editCates").hide();
                $("#addPros").hide();
                $("#addUsers").hide();
                $("#listPros").hide();
                $("#editPros").hide();
                $("#listUsers").hide();
                $("#editUsers").hide();
                $("#listProImgs").hide();
            }
        });
    }
    if (index2 != -1) {
        $.ajax({
            success: function () {
                $("#editManagers").hide();
                $("#addManagers").hide();
                $("#listManagers").show();
                $("#main").hide();
                $("#addCate1").hide();
                $("#listCates").hide();
                $("#editCates").hide();
                $("#addPros").hide();
                $("#listPros").hide();
                $("#addUsers").hide();
                $("#editPros").hide();
                $("#listUsers").hide();
                $("#editUsers").hide();
                $("#listProImgs").hide();
            }
        });
    }
    if (index3 != -1) {
        $.ajax({
            success: function () {
                $("#editManagers").hide();
                $("#addManagers").hide();
                $("#listManagers").hide();
                $("#main").hide();
                $("#listCates").hide();
                $("#editCates").hide();
                $("#addPros").hide();
                $("#addCate1").show();
                $("#listPros").hide();
                $("#editPros").hide();
                $("#addUsers").hide();
                $("#listUsers").hide();
                $("#editUsers").hide();
                $("#listProImgs").hide();
            }
        });
    }
    if (index4 != -1) {
        $.ajax({
            success: function () {
                $("#editManagers").hide();
                $("#addManagers").hide();
                $("#listManagers").hide();
                $("#main").hide();
                $("#addCate1").hide();
                $("#listCates").show();
                $("#editCates").hide();
                $("#addPros").hide();
                $("#listPros").hide();
                $("#editPros").hide();
                $("#addUsers").hide();
                $("#listUsers").hide();
                $("#editUsers").hide();
                $("#listProImgs").hide();
            }
        });
    }
    if (index5 != -1) {
        $.ajax({
            success: function () {
                $("#editManagers").hide();
                $("#addManagers").hide();
                $("#listManagers").hide();
                $("#main").hide();
                $("#addCate1").hide();
                $("#listCates").hide();
                $("#editCates").show();
                $("#addPros").hide();
                $("#listPros").hide();
                $("#editPros").hide();
                $("#addUsers").hide();
                $("#editUsers").hide();
                $("#listUsers").hide();
                $("#listProImgs").hide();
            }
        });
    }
    if (index6 != -1) {
        $.ajax({
            success: function () {
                $("#editManagers").hide();
                $("#addManagers").hide();
                $("#listManagers").hide();
                $("#main").hide();
                $("#addCate1").hide();
                $("#listCates").hide();
                $("#editCates").hide();
                $("#addPros").show();
                $("#addUsers").hide();
                $("#listPros").hide();
                $("#editPros").hide();
                $("#listUsers").hide();
                $("#editUsers").hide();
                $("#listProImgs").hide();
            }
        });
    }
    if (index7 != -1) {
        $.ajax({
            success: function () {
                $("#editManagers").hide();
                $("#addManagers").hide();
                $("#listManagers").hide();
                $("#main").hide();
                $("#addCate1").hide();
                $("#listCates").hide();
                $("#editCates").hide();
                $("#addPros").hide();
                $("#listPros").show();
                $("#editPros").hide();
                $("#addUsers").hide();
                $("#listUsers").hide();
                $("#editUsers").hide();
                $("#listProImgs").hide();
            }
        });
    }
    if (index8 != -1) {
        $.ajax({
            success: function () {
                $("#editManagers").hide();
                $("#addManagers").hide();
                $("#listManagers").hide();
                $("#main").hide();
                $("#addCate1").hide();
                $("#listCates").hide();
                $("#editCates").hide();
                $("#addPros").hide();
                $("#listPros").hide();
                $("#editPros").show();
                $("#addUsers").hide();
                $("#listUsers").hide();
                $("#editUsers").hide();
                $("#listProImgs").hide();
            }
        });
    }
    if (index9 != -1) {
        $.ajax({
            success: function () {
                $("#editManagers").hide();
                $("#addManagers").hide();
                $("#listManagers").hide();
                $("#main").hide();
                $("#addCate1").hide();
                $("#listCates").hide();
                $("#editCates").hide();
                $("#addPros").hide();
                $("#listPros").hide();
                $("#editPros").hide();
                $("#addUsers").show();
                $("#listUsers").hide();
                $("#editUsers").hide();
                $("#listProImgs").hide();
            }
        });
    }
    if (index10 != -1) {
        $.ajax({
            success: function () {
                $("#editManagers").hide();
                $("#addManagers").hide();
                $("#listManagers").hide();
                $("#main").hide();
                $("#addCate1").hide();
                $("#listCates").hide();
                $("#editCates").hide();
                $("#addPros").hide();
                $("#listPros").hide();
                $("#editPros").hide();
                $("#addUsers").hide();
                $("#listUsers").show();
                $("#editUsers").hide();
                $("#listProImgs").hide();
            }
        });
    }
    if (index11 != -1) {
        $.ajax({
            success: function () {
                $("#editManagers").hide();
                $("#addManagers").hide();
                $("#listManagers").hide();
                $("#main").hide();
                $("#addCate1").hide();
                $("#listCates").hide();
                $("#editCates").hide();
                $("#addPros").hide();
                $("#listPros").hide();
                $("#editPros").hide();
                $("#addUsers").hide();
                $("#listUsers").hide();
                $("#editUsers").show();
                $("#listProImgs").hide();
            }
        });
    }
    $("#editPros").hide();
    $("#listPros").hide();
    $("#main").show();
    $("#addPros").hide();
    $("#editManagers").hide();
    $("#addManagers").hide();
    $("#listManagers").hide();
    $("#addCate1").hide();
    $("#listCates").hide();
    $("#editCates").hide();
    $("#addUsers").hide();
    $("#listUsers").hide();
    $("#editUsers").hide();
    $("#listProImgs").hide();
    $("#addManager").click(function () {
        $("#main").hide();
        $("#listManagers").hide();
        $("#editManagers").hide();
        $('#addManagers').show();
        $("#addCate1").hide();
        $("#listCates").hide();
        $("#editCates").hide();
        $("#listPros").hide();
        $("#addPros").hide();
        $("#editPros").hide();
        $("#addUsers").hide();
        $("#listUsers").hide();
        $("#editUsers").hide();
        $("#listProImgs").hide();
    });
    $("#listManager").click(function () {
        $("#main").hide();
        $("#addManagers").hide();
        $("#editManagers").hide();
        $("#listManagers").show();
        $("#addCate1").hide();
        $("#listCates").hide();
        $("#editCates").hide();
        $("#addPros").hide();
        $("#listPros").hide();
        $("#editPros").hide();
        $("#addUsers").hide();
        $("#listUsers").hide();
        $("#editUsers").hide();
        $("#listProImgs").hide();
    });
    //
    $("#addCate").click(function () {
        $("#editManagers").hide();
        $("#listManagers").hide();
        $("#addManagers").hide();
        $("#main").hide();
        $("#addCate1").show();
        $("#listCates").hide();
        $("#editCates").hide();
        $("#addPros").hide();
        $("#listPros").hide();
        $("#editPros").hide();
        $("#addUsers").hide();
        $("#listUsers").hide();
        $("#editUsers").hide();
        $("#listProImgs").hide();
    });
    $("#listCate").click(function () {
        $("#editManagers").hide();
        $("#listManagers").hide();
        $("#addManagers").hide();
        $("#main").hide();
        $("#addCate1").hide();
        $("#listCates").show();
        $("#addPros").hide();
        $("#editCates").hide();
        $("#listPros").hide();
        $("#editPros").hide();
        $("#addUsers").hide();
        $("#listUsers").hide();
        $("#editUsers").hide();
        $("#listProImgs").hide();
    });
    $("#addPro").click(function () {
        $("#editManagers").hide();
        $("#listManagers").hide();
        $("#addManagers").hide();
        $("#main").hide();
        $("#addCate1").hide();
        $("#listCates").hide();
        $("#editCates").hide();
        $("#addPros").show();
        $("#listPros").hide();
        $("#addUsers").hide();
        $("#editPros").hide();
        $("#listUsers").hide();
        $("#editUsers").hide();
        $("#listProImgs").hide();
    });
    $("#listPro").click(function () {
        $("#editManagers").hide();
        $("#listManagers").hide();
        $("#addManagers").hide();
        $("#main").hide();
        $("#addCate1").hide();
        $("#listCates").hide();
        $("#editCates").hide();
        $("#addPros").hide();
        $("#listPros").show();
        $("#editPros").hide();
        $("#addUsers").hide();
        $("#listUsers").hide();
        $("#editUsers").hide();
        $("#listProImgs").hide();
    });
    $("#addUser").click(function () {
        $("#editManagers").hide();
        $("#listManagers").hide();
        $("#addManagers").hide();
        $("#main").hide();
        $("#addCate1").hide();
        $("#listCates").hide();
        $("#editCates").hide();
        $("#addPros").hide();
        $("#listPros").hide();
        $("#editPros").hide();
        $("#addUsers").show();
        $("#listUsers").hide();
        $("#editUsers").hide();
        $("#listProImgs").hide();
    });
    $("#listUser").click(function () {
        $("#editManagers").hide();
        $("#listManagers").hide();
        $("#addManagers").hide();
        $("#main").hide();
        $("#addCate1").hide();
        $("#listCates").hide();
        $("#editCates").hide();
        $("#addPros").hide();
        $("#listPros").hide();
        $("#editPros").hide();
        $("#addUsers").hide();
        $("#listUsers").show();
        $("#editUsers").hide();
        $("#listProImgs").hide();
    });
    $("#listProImg").click(function () {
        $("#editManagers").hide();
        $("#listManagers").hide();
        $("#addManagers").hide();
        $("#main").hide();
        $("#addCate1").hide();
        $("#listCates").hide();
        $("#editCates").hide();
        $("#addPros").hide();
        $("#listPros").hide();
        $("#editPros").hide();
        $("#addUsers").hide();
        $("#listUsers").hide();
        $("#editUsers").hide();
        $("#listProImgs").show();
    });
});
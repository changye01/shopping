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
    index11 = url.indexOf("editUsers");
    index12=url.indexOf("listOrders");
    if (index != -1) {
        $.ajax({
            success: function () {
                $("#main").hide();
                $("#listManagers").hide();
                $("#editManagers").hide();
                $('#addManagers').show();
                $("#addCate1").hide();
                $("#listCates").hide();
                $("#editCates").hide();
                $("#addUsers").hide();
                $("#addPros").hide();
                $("#listPros").hide();
                $("#editPros").hide();
                $("#listUsers").hide();
                $("#editUsers").hide();
                $("#listOrders").hide();
                $("#donelistOrders").hide();
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
                $("#addCate1").hide();
                $("#listCates").hide();
                $("#editCates").hide();
                $("#addPros").hide();
                $("#addUsers").hide();
                $("#listPros").hide();
                $("#editPros").hide();
                $("#listUsers").hide();
                $("#editUsers").hide();
                $("#listProImgs").hide();
                $("#listOrders").hide();
                $("#donelistOrders").hide();
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
                $("#listOrders").hide();
                $("#donelistOrders").hide();
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
                $("#listOrders").hide();
                $("#donelistOrders").hide();
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
                $("#listOrders").hide();
                $("#donelistOrders").hide();
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
                $("#listOrders").hide();
                $("#donelistOrders").hide();
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
                $("#listOrders").hide();
                $("#donelistOrders").hide();
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
                $("#listOrders").hide();
                $("#donelistOrders").hide();
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
                $("#listOrders").hide();
                $("#donelistOrders").hide();
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
                $("#listOrders").hide();
                $("#donelistOrders").hide();
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
                $("#listOrders").hide();
                $("#donelistOrders").hide();
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
                $("#listOrders").hide();
                $("#donelistOrders").hide();
            }
        });
    }
    if (index12 != -1) {
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
                $("#editUsers").hide();
                $("#listProImgs").hide();
                $("#listOrders").show();
                $("#donelistOrders").hide();
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
    $("#listOrders").hide();
    $("#donelistOrders").hide();
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
        $("#listOrders").hide();
        $("#donelistOrders").hide();
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
        $("#listOrders").hide();
        $("#donelistOrders").hide();
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
        $("#listOrders").hide();
        $("#donelistOrders").hide();
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
        $("#listOrders").hide();
        $("#donelistOrders").hide();
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
        $("#listOrders").hide();
        $("#donelistOrders").hide();
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
        $("#listOrders").hide();
        $("#donelistOrders").hide();
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
        $("#listOrders").hide();
        $("#donelistOrders").hide();
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
        $("#listOrders").hide();
        $("#donelistOrders").hide();
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
        $("#listOrders").hide();
        $("#donelistOrders").hide();
    });
    $("#listOrder").click(function () {
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
        $("#listProImgs").hide();
        $("#listOrders").show();
        $("#donelistOrders").hide();
    });
    
});
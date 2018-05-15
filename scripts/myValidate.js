$.validator.setDefaults({
    submitHandler: function () {
        // alert("提交事件!");
        success: form.submit();
    }
});

$().ready(function () {
    $("#register").validate({
        rules: {
            username: {
                required: true,
                minlength: 5
            },
            password: {
                required: true,
                minlength: 5
            },
            
            confirmPassword: {
                required: true,
                equalTo: "#exampleInputPassword1"
            },
            email: {
                required: true,
                email: true,
            },
            location: {
                required: true,
            },
            agree:{
                required:true,
            }

        },
        messages: {
            username: {
                required: "请输入用户名",
                minlength: "用户名必须5字段以上",
            },
            password: {
                required: "请输入密码",
                minlength: "密码必须5字段以上",
            },
            confirmPassword: {
                // required:"请输入用户名",
                equalTo: "密码不一致",
            },
            email: {
                required: "请输入邮箱",
                email: "请输入正确的邮箱格式",
            },
            location: {
                required: "请输入送货地址",

            },
            agree:{
                required:"未同意本公司的条约",
            }
        }
    });
    $("#updateUser").validate({
        rules: {
            username: {
                required: true,
                minlength: 5
            },
            password: {
                required: true,
                minlength: 5
            },
            
            email: {
                required: true,
                email: true,
            },
            location: {
                required: true,
            },


        },
        messages: {
            username: {
                required: "请输入用户名",
                minlength: "用户名必须5字段以上",
            },
            password: {
                required: "请输入密码",
                minlength: "密码必须5字段以上",
            },
            
            email: {
                required: "请输入邮箱",
                email: "请输入正确的邮箱格式",
            },
            location: {
                required: "请输入送货地址",

            },
        }
    });
    $("#order").validate({
        rules:{
            num:{
                required:true,
                // 必须输入整数
                digits:true,
            }
        },
        messages:{
            num:{
                required:"请输入要购买的数量",
                digits:"请输入一个整数"
            }
        }
    })
});
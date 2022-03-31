package com.appletree24.threewingsspring01.controller;


import com.appletree24.threewingsspring01.domain.User;
import com.appletree24.threewingsspring01.service.UserService;
import com.appletree24.threewingsspring01.utils.Result;
import org.springframework.web.bind.annotation.*;

import javax.annotation.Resource;

@RestController
@RequestMapping("/user")
public class UserController {
    @Resource
    private UserService userService;

    @PostMapping("/login")
    public Result<User> loginController(@RequestParam String uname,@RequestParam String password){
        User user=userService.loginService(uname,password);
        if(user!=null){
            return Result.success(user,"登录成功！");
        }else{
            return Result.error("123","账号密码错误");
        }
    }

    @PostMapping("/register")
    public Result<User> registerController(@RequestBody User newUser){
        User user=userService.registerService(newUser);
        if(user!=null){
            return Result.success(user,"注册成功！");
        }else{
            return Result.error("456","抱歉，注册失败，该用户名已存在！");
        }
    }
}

package com.appletree24.threewingsspring01.service;

import com.appletree24.threewingsspring01.domain.User;

public interface UserService {


    /**
     * 登录逻辑实现
     * @param uname 用户名
     * @param password 密码
     * @return
     */
    User loginService(String uname,String password);


    /**
     * 注册逻辑实现
     * @param user 用户名
     * @return
     */
    User registerService(User user);
}

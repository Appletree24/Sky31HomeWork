package com.appletree24.threewingsspring01.service.serviceImpl;

import com.appletree24.threewingsspring01.domain.User;
import com.appletree24.threewingsspring01.repository.UserDao;
import com.appletree24.threewingsspring01.service.UserService;
import org.springframework.stereotype.Service;

import javax.annotation.Resource;

@Service
public class UserServiceImpl implements UserService {

    @Resource
    private UserDao userDao;

    @Override
    public User loginService(String uname, String password) {
        User user=userDao.findByUnameAndPassword(uname,password);
        if(user!=null){
            user.setPassword("");
        }
        return user;
    }

    @Override
    public User registerService(User user) {
        if(userDao.findByUname(user.getUname())!=null){
            return null;
        }else{
            User newUser=userDao.save(user);
            if(newUser!=null){
                newUser.setPassword("");
            }
            return newUser;
        }
    }



}

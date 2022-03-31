package com.appletree24.threewingsspring01.repository;


import com.appletree24.threewingsspring01.domain.User;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface UserDao extends JpaRepository<User, Long> {
    User findByUname(String uname);
    User findByUnameAndPassword(String uname,String password);
}

# Blog

The blog posts list appears on the home page. Also, each post can be read.
If the user is registered on the blog and he leaves a comment, then the admin will be able to see who wrote. If the user is not registered, then the admin will not know.

Admin features:
- add/edit title of blog posts
- add/edit content of blog posts
- delete comments

###### Technology

I used symfony to create a blog.
I decided to use a SQLite for a relational database.
For the front-end used Bootstrap.

###### How to start?

At first need to download [composer](https://getcomposer.org/download/) and [symphony](https://symfony.com/download).
Then clone my project to any folder. you can use `git clone https://github.com/vjefimova/Blog.git`.
Now you need to start the cmd and start the server `symfony server:start`.
Go to any browser and enter the address bar 127.0.0.1:8000.

You will see it
![image](https://user-images.githubusercontent.com/60796360/117777327-2b11b380-b245-11eb-92da-09e1a9996b05.png)

To check what the admin can do, the login **admin@email.com** and the password **admin**.
Through the menu you can get to the page where all the comments to the posts will be. There will be a button on the main page to add a new post.


To check what a regular user can do, you can create your own user.
To leave a comment, you need to go to any post and there will be a button to add a comment.

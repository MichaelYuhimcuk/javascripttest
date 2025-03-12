// Домашнє завдання
async function getPosts() {
    try {
        const response = await fetch('https://jsonplaceholder.typicode.com/posts');
        if (!response.ok) {
            throw new Error(`HTTP Error! Status: ${response.status}`);
        }
        const posts = await response.json();
        console.log('Posts:', posts);
    } catch (error) {
        console.error('Error fetching posts:', error);
    }
}

async function createPost() {
    try {
        const newPost = {
            title: 'My New Post',
            body: 'This is the content of my new post.',
            userId: 1
        };

        const response = await fetch('https://jsonplaceholder.typicode.com/posts', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(newPost)
        });

        if (!response.ok) {
            throw new Error(`HTTP Error! Status: ${response.status}`);
        }

        const postData = await response.json();
        console.log('Created Post:', postData);
    } catch (error) {
        console.error('Error creating post:', error);
    }
}

async function getUsersWithPosts() {
    try {
        const usersResponse = await fetch('https://jsonplaceholder.typicode.com/users');
        if (!usersResponse.ok) {
            throw new Error(`HTTP Error! Status: ${usersResponse.status}`);
        }
        const users = await usersResponse.json();

        const postsPromises = users.map(user =>
            fetch(`https://jsonplaceholder.typicode.com/posts?userId=${user.id}`).then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP Error! Status: ${response.status}`);
                }
                return response.json();
            })
        );

        const usersPosts = await Promise.all(postsPromises);

        users.forEach((user, index) => {
            console.log(`User: ${user.name}`, 'Posts:', usersPosts[index]);
        });
    } catch (error) {
        console.error('Error fetching users and their posts:', error);
    }
}

getPosts();
createPost();
getUsersWithPosts();

# pu-2023-05

## University of Plovdiv, Internship, May 2023

### Requirements

- Please use a personal email.
- Register on Github.com and send your email address to us.
- Register on Drupal.org and add "MODERNA BG LTD" (moderna-bg-ltd) as your Work >> Organization.

### Git

- Install Git locally - https://git-scm.com/ (+ GitBash console)
- Git servers - Github.com, Gitlab.com, Bitbucket.com (custom Redmine, etc.)
- Most used console commands:

```
git clone git@github.com:moderna-bg-ltd/pu-2023-01.git
git pull
<apply code changes>
git add .
git commit -m"Describe code changes"
git push
```

### SSH
- New SSH key generation: `ssh-keygen -t rsa`
- Private & Public SSH keys.
- Resource: https://docs.github.com/en/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent
- Generate SSH key: ssh-keygen -t rsa -b 4096 -C "your_email@example.com".
- Start SSH agent: eval "$(ssh-agent -s)"
- Add your personal SSH key: ssh-add ~/.ssh/id_your_private_ssh_key

### Local Dev server

- Windows - Wamp64 (64bit): https://www.wampserver.com/en/download-wampserver-64bits/
- MacOS - Mamp64.
- Linux - integrated.
- Docker - Win/Mac/Linux - Linux Containers on Windows OS: [https://www.docker.com/](https://docs.docker.com/desktop/install/windows-install/)


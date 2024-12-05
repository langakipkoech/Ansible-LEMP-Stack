# Ansible LEMP Stack - WordPress Deployment

This repository contains an Ansible playbook for deploying a LEMP (Linux, Nginx, MySQL, PHP) stack with WordPress on a remote server. The playbook automates the process of installing and configuring all required components, setting up the database, and deploying WordPress with minimal manual intervention.

## Features

- **LEMP Stack Setup:** Installs and configures Nginx, MySQL, and PHP.
- **WordPress Deployment:** Automatically deploys WordPress from a zip file to a specified directory.
- **Database Configuration:** Creates a dedicated MySQL database and user for WordPress.
- **Service Management:** Restarts the Nginx service after deploying WordPress for seamless integration.
- **Customizable:** Easily configurable to suit your environment, such as database settings and server details.

## Prerequisites

Before using this playbook, ensure the following are set up:

- **Ansible:** You need Ansible installed on your local machine. [Install Ansible](https://docs.ansible.com/ansible/latest/installation_guide/installation_distros.html) if it's not already installed.
- **Remote Server:** A remote server (e.g., Ubuntu) with SSH access enabled.
- **SSH Key:** Ensure you can SSH into the remote server with an appropriate private key.

### 1. Clone the Repo, and get into the cloned directory and run the playbook.Ensure to setup the inventory and have ssh key setup for seamless communication

## Getting Started

### 1. Clone the Repository

Clone this repository to your local machine using the following command:

```bash
git clone https://github/langakipkoech/ansible-lemp-stack-wordpress.git
cd ansible-lemp-stack-wordpress









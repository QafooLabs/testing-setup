# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  config.vm.hostname = "testing-setup.qafoo.local"
  config.vm.network :private_network, ip: "33.33.33.10"

  config.vm.box_url = "https://cloud-images.ubuntu.com/xenial/current/xenial-server-cloudimg-amd64-vagrant.box"
  config.vm.box = "ubuntu/xenial64"

  config.ssh.insert_key = true
  config.ssh.forward_agent = true
  
  config.vm.provider :virtualbox do |vb|
    vb.customize ["modifyvm", :id, "--cpus", `#{RbConfig::CONFIG['host_os'] =~ /darwin/ ? 'sysctl -n hw.ncpu' : 'nproc'}`.chomp]
    vb.customize ["modifyvm", :id, "--ioapic", "on"]
  
    vb.customize ["modifyvm", :id, "--memory", 1024]
    vb.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
  end

  config.vm.provision "shell", inline: "echo 180 > /sys/block/sda/device/timeout"

  config.vm.provision "ansible_local" do |ansible|
      ansible.inventory_path = "/home/vagrant/testing-setup/vm/vagrant"
      ansible.limit = "all"
      ansible.playbook = "/home/vagrant/testing-setup/vm/provision.yml"
      ansible.verbose = false
  
      if ENV['ANSIBLE_TAGS'] != nil
          puts "Setting ansible.tags=#{ENV['ANSIBLE_TAGS']}"
          ansible.tags = "#{ENV['ANSIBLE_TAGS']}"
      end
  end

  config.vm.network :forwarded_port, guest: 22, host: 22023, id: "ssh"
  if Vagrant::Util::Platform.windows?
      config.vm.synced_folder ".", "/home/vagrant/testing-setup", type: "rsync", rsync__exclude: ".git/"
  else
      config.vm.synced_folder ".", "/home/vagrant/testing-setup", mount_options: ["rw", "tcp", "nolock", "noacl", "async"], :nfs => true
  end
  config.vm.synced_folder ".", "/vagrant"
end

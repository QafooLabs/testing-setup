# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  config.vm.hostname = "testing-setup.qafoo.local"
  config.vm.network :private_network, ip: "33.33.33.10"

  config.vm.box = "ubuntu/trusty64"


  #config.vbguest.auto_update = false
  
  config.vm.define "testing-setup" do |setup|

    config.vm.provider "virtualbox" do |vb|
      vb.customize ["modifyvm", :id, "--memory", 1024]
    end

    config.vm.provision :puppet do |puppet|
      puppet.manifests_path = "vm"
      puppet.manifest_file = "main.pp"
      puppet.options = ['--verbose']
    end
  end

  config.vm.synced_folder "./", "/home/vagrant/testing-setup", :nfs => (RUBY_PLATFORM =~ /linux/ or RUBY_PLATFORM =~ /darwin/)
end

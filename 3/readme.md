# MODULING
Pada sesi ini, kita belajar memisahkan file-file sesuai modul / fitur yang akan dibuat.

# Kenapa di buat moduling?
Supaya kita hanya me-load file yang kita butuhkan saja, tidak semua file kita load.

# Example API
http://localhost/nama_folder_mu/index.php?request=api&modul=tes&version=v1&method=coba

# Example WEB
http://localhost/nama_folder_mu/index.php?request=web&modul=user&page=list
http://localhost/nama_folder_mu/index.php?request=web&modul=user&page=form

atau

http://localhost/nama_folder_mu/index.php?modul=user&page=list
http://localhost/nama_folder_mu/index.php?modul=user&page=form

# Example BACKEND
Request API melalui Backend
http://localhost/nama_folder_mu/index.php?request=backend&modul=tes&version=v1&method=coba

Proses Backend
http://localhost/nama_folder_mu/index.php?request=backend&modul=coba&proses=tes
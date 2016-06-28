# pma_advance_login
advanced login method for phpmyadmin, you can defind some dbs and users (can be diffrent with db users) in config file, and user can login by their own password, and chose the db they granted to login (also defind in config file).

## installation

1. `cd path_to_your_phpmyadmin`
2. `git clone https://github.com/leo108/pma_advance_login any_name_other_than_default`

## configuration

1. modify `path_to_pma_advance_login/db.php`, you can add any number of mysql db into this file. For every db, these fields are required: `host`/`port`/`user`/`password`, and `cfgupdate` is optional.
2. modify `path_to_pma_advance_login/user.php`, username is the array key, every user should have a `password` field and a `db` field, `password` is a `md5` hash of real password, and `db` is an array that contains the name of dbs the user granted.
3. modify `path_to_pma/config.inc.php`, remove all `$cfg['Servers']` configs, and change to:

```
$i++;
$cfg['Servers'][$i]['verbose'] = 'localhost';
$cfg['Servers'][$i]['socket'] = '';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['auth_type'] = 'signon';
$cfg['Servers'][$i]['SignonSession'] = 'PmaAdvanceLogin';
$cfg['Servers'][$i]['SignonURL']     = 'pma_advance_login/index.php'; //should change to the path_to_pma_advance_login
```

done

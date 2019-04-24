CREATE TABLE mensajes (
  id int(4) NOT NULL default '0',
  tiempo timestamp(14) NOT NULL,
  usuario tinyint(4) NOT NULL default '0',
  para int(11) NOT NULL default '0',
  mensaje text NOT NULL,
  PRIMARY KEY  (id)
) TYPE=MyISAM;
CREATE TABLE usuariosc (
  nombre varchar(100) NOT NULL default '',
  id tinyint(4) NOT NULL default '0',
  icono varchar(30) NOT NULL default '',
  showip tinyint(1) NOT NULL default '0',
  ip varchar(16) NOT NULL default '',
  tiempo timestamp(14) NOT NULL,
  PRIMARY KEY  (id)
) TYPE=MyISAM;


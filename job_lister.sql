use job_lister;

create table if not exists `categories` (
	`id` int auto_increment primary key not null,
	`name` varchar(255) not null
);

create table if not exists `jobs` (
	`id` int auto_increment primary key not null,
	`category_id` int not null,
	`company` varchar(255) not null,
	`job_title` varchar(255) not null,
	`desciprtion` varchar(255) not null,
	`salary` varchar(255) not null,
	`location` varchar(255) not null,
	`contact_user` varchar(255) not null,
	`contact_email` varchar(255) not null,
	foreign key (category_id) references categories (id)
);

insert into jobs (category_id,company,job_title,description,salary,location,contact_user,contact_email) values (2,'Tech Guy','Entry Level Programmer','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letra set sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','5 LPA', 'Raipur, CG', 'John Doe','raviprakash.bhilai@gmail.com');
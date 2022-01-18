DROP TABLE EXISTS IF alumnos CASCADE;

CREATE TABLE alumnos
(
        id      bigserial       PRIMARY KEY
    ,   nombre  varchar(255)    NOT NULL
);

DROP TABLE EXISTS IF ccee CASCADE;

CREATE TABLE ccee
(
        id           bigserial       PRIMARY KEY
    ,   ce           
    ,   descripcion  varchar(255)    NOT NULL
);

DROP TABLE EXISTS IF notas CASCADE;

CREATE TABLE alumnos
(
        id          bigserial       PRIMARY KEY
    ,   alumno_id   bigint          NOT NULL UNIQUE REFERENCES alumnos (id)
    ,   ccee_id     bigint          NOT NULL UNIQUE REFERENCES ccee (id)
    ,   nota        int
);


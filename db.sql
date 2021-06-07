CREATE TYPE "jenis" AS ENUM (
  'Reguler',
  'Sweetbox',
  'premiere'
);

CREATE TABLE "tb_akun" (
  "id_akun" BIGSERIAL PRIMARY KEY,
  "email" varchar,
  "password" varchar,
  "phone_number" varchar,
  "nama" varchar,
  "created_at" timestamp,
  "updated_at" timestamp,
  "deleted_at" timestamp
);

CREATE TABLE "tb_pembelian" (
  "id_pembelian" BIGSERIAL PRIMARY KEY,
  "id_akun" integer,
  "id_film" integer,
  "jenis" jenis,
  "taggal" timestamp,
  "jumlahDewasa" integer,
  "jumlahAnak" integer,
  "hargaTotal" integer,
  "created_at" timestamp,
  "updated_at" timestamp,
  "deleted_at" timestamp
);

CREATE TABLE "tb_film" (
  "id_film" BIGSERIAL PRIMARY KEY,
  "judul" varchar,
  "hargaDewasa" integer,
  "hargaAnak" integer,
  "created_at" timestamp,
  "updated_at" timestamp,
  "deleted_at" timestamp
);

ALTER TABLE "tb_pembelian" ADD FOREIGN KEY ("id_akun") REFERENCES "tb_akun" ("id_akun");

ALTER TABLE "tb_pembelian" ADD FOREIGN KEY ("id_film") REFERENCES "tb_film" ("id_film");

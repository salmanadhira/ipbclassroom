PGDMP                     
    z            ipbclassroom    15.1    15.1                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    16406    ipbclassroom    DATABASE     �   CREATE DATABASE ipbclassroom WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_United States.1252';
    DROP DATABASE ipbclassroom;
                postgres    false            �            1259    24627    admins    TABLE       CREATE TABLE public.admins (
    id integer NOT NULL,
    admins_nama character varying(255) NOT NULL,
    admins_fakultas character varying(255) NOT NULL,
    admins_username character varying(255) NOT NULL,
    admins_password character varying(255) NOT NULL
);
    DROP TABLE public.admins;
       public         heap    postgres    false            �            1259    24626    admins_id_seq    SEQUENCE     �   CREATE SEQUENCE public.admins_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.admins_id_seq;
       public          postgres    false    217                       0    0    admins_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.admins_id_seq OWNED BY public.admins.id;
          public          postgres    false    216            �            1259    24674 
   peminjaman    TABLE     �  CREATE TABLE public.peminjaman (
    id integer NOT NULL,
    kode_ruangan_peminjaman character varying(255) NOT NULL,
    id_users integer,
    nama_acara character varying(255) NOT NULL,
    deskripsi_acara text,
    waktu_mulai timestamp without time zone NOT NULL,
    waktu_selesai timestamp without time zone NOT NULL,
    notelfon_pj character varying NOT NULL,
    disetujui boolean,
    ruangan_nama_peminjaman character varying(255)
);
    DROP TABLE public.peminjaman;
       public         heap    postgres    false            �            1259    24673    peminjaman_id_seq    SEQUENCE     �   CREATE SEQUENCE public.peminjaman_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.peminjaman_id_seq;
       public          postgres    false    220                       0    0    peminjaman_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.peminjaman_id_seq OWNED BY public.peminjaman.id;
          public          postgres    false    219            �            1259    24647    ruangan    TABLE     :  CREATE TABLE public.ruangan (
    kode_ruangan character varying(255) NOT NULL,
    ruangan_fakultas character varying(255) NOT NULL,
    ruangan_nama character varying(255) NOT NULL,
    ruangan_lokasi character varying(255) NOT NULL,
    ruangan_kapasitas integer NOT NULL,
    bisa_dipinjam boolean NOT NULL
);
    DROP TABLE public.ruangan;
       public         heap    postgres    false            �            1259    16408    users    TABLE     y  CREATE TABLE public.users (
    id integer NOT NULL,
    nama character varying(255) NOT NULL,
    nim character varying(255) NOT NULL,
    fakultas character varying(255) NOT NULL,
    departemen character varying(255) NOT NULL,
    notelfon character varying NOT NULL,
    users_username character varying(255) NOT NULL,
    users_password character varying(255) NOT NULL
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    16407    users_id_seq    SEQUENCE     �   CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    215                       0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    214            t           2604    24630 	   admins id    DEFAULT     f   ALTER TABLE ONLY public.admins ALTER COLUMN id SET DEFAULT nextval('public.admins_id_seq'::regclass);
 8   ALTER TABLE public.admins ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    217    217            u           2604    24677    peminjaman id    DEFAULT     n   ALTER TABLE ONLY public.peminjaman ALTER COLUMN id SET DEFAULT nextval('public.peminjaman_id_seq'::regclass);
 <   ALTER TABLE public.peminjaman ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    219    220            s           2604    16411    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    214    215                      0    24627    admins 
   TABLE DATA           d   COPY public.admins (id, admins_nama, admins_fakultas, admins_username, admins_password) FROM stdin;
    public          postgres    false    217   $                 0    24674 
   peminjaman 
   TABLE DATA           �   COPY public.peminjaman (id, kode_ruangan_peminjaman, id_users, nama_acara, deskripsi_acara, waktu_mulai, waktu_selesai, notelfon_pj, disetujui, ruangan_nama_peminjaman) FROM stdin;
    public          postgres    false    220   7$                 0    24647    ruangan 
   TABLE DATA           �   COPY public.ruangan (kode_ruangan, ruangan_fakultas, ruangan_nama, ruangan_lokasi, ruangan_kapasitas, bisa_dipinjam) FROM stdin;
    public          postgres    false    218   4%                 0    16408    users 
   TABLE DATA           n   COPY public.users (id, nama, nim, fakultas, departemen, notelfon, users_username, users_password) FROM stdin;
    public          postgres    false    215   4&                  0    0    admins_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.admins_id_seq', 1, false);
          public          postgres    false    216                       0    0    peminjaman_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.peminjaman_id_seq', 8, true);
          public          postgres    false    219                        0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 1, false);
          public          postgres    false    214            y           2606    24634    admins admins_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.admins
    ADD CONSTRAINT admins_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.admins DROP CONSTRAINT admins_pkey;
       public            postgres    false    217            }           2606    24681    peminjaman peminjaman_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.peminjaman
    ADD CONSTRAINT peminjaman_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.peminjaman DROP CONSTRAINT peminjaman_pkey;
       public            postgres    false    220            {           2606    24653    ruangan ruangan_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.ruangan
    ADD CONSTRAINT ruangan_pkey PRIMARY KEY (kode_ruangan);
 >   ALTER TABLE ONLY public.ruangan DROP CONSTRAINT ruangan_pkey;
       public            postgres    false    218            w           2606    16415    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    215            ~           2606    24687 #   peminjaman peminjaman_id_users_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.peminjaman
    ADD CONSTRAINT peminjaman_id_users_fkey FOREIGN KEY (id_users) REFERENCES public.users(id) ON DELETE SET NULL;
 M   ALTER TABLE ONLY public.peminjaman DROP CONSTRAINT peminjaman_id_users_fkey;
       public          postgres    false    215    3191    220                       2606    24682 '   peminjaman peminjaman_kode_ruangan_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.peminjaman
    ADD CONSTRAINT peminjaman_kode_ruangan_fkey FOREIGN KEY (kode_ruangan_peminjaman) REFERENCES public.ruangan(kode_ruangan) ON DELETE SET NULL;
 Q   ALTER TABLE ONLY public.peminjaman DROP CONSTRAINT peminjaman_kode_ruangan_fkey;
       public          postgres    false    220    218    3195               %   x�3��)�)�tsqq���8--�͸b���� ��`         �   x������0�s�}�,3�����RX��꩗��v����;-]bԓ���|�?$� v�D�D�������^�|IDI*%,�*B���@Dޅ��%JT `�=���_ǟ�$	���`rF!c�L����^�<����k�ϝ����G�z������DH���^�j��q[���,�oPA�FO�F�<#����7C`#��Ƶ��o�gOVu���?�sz�7�~�<>�Tj�:d�qMx��$�
	x�         �   x�M�AN�0EדS�2Y$�	=�K�HC���6#ŀU�`s~�jU��F��{��娷BH0j�'"���yZ��g�X���x:��.�=H! dZ1>u����I�0<W8��_��(q�y���1lj�sdғ�tv�9�h(�@P��j߮������<�Ἰxºl
��9r�
s}qg^S\��iͺ�,X������k��|�AY��:a�-��.�q���;MYx�ު,�� SY         R   x�3�N��M�t7310424403�t��p����-U���-(-I-�4�047000224�,��KL��,J�44261����� �Pw     
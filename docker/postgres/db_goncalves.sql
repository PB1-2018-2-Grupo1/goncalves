--
-- PostgreSQL database dump
--

-- Dumped from database version 16.3 (Ubuntu 16.3-0ubuntu0.24.04.1)
-- Dumped by pg_dump version 16.3 (Ubuntu 16.3-0ubuntu0.24.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: tb_categories; Type: TABLE; Schema: public; Owner: lucas
--

CREATE TABLE public.tb_categories (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    description text
);


ALTER TABLE public.tb_categories OWNER TO lucas;

--
-- Name: tb_persons; Type: TABLE; Schema: public; Owner: lucas
--

CREATE TABLE public.tb_persons (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    surname character varying(255) NOT NULL,
    email character varying(255) NOT NULL
);


ALTER TABLE public.tb_persons OWNER TO lucas;

--
-- Name: tb_products; Type: TABLE; Schema: public; Owner: lucas
--

CREATE TABLE public.tb_products (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    price numeric(10,2) NOT NULL,
    desctiption text,
    id_category integer NOT NULL,
    CONSTRAINT tb_products_price_check CHECK ((price > (0)::numeric))
);


ALTER TABLE public.tb_products OWNER TO lucas;

--
-- Name: tb_users; Type: TABLE; Schema: public; Owner: lucas
--

CREATE TABLE public.tb_users (
    id integer NOT NULL,
    login character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    id_person integer NOT NULL
);


ALTER TABLE public.tb_users OWNER TO lucas;

--
-- Data for Name: tb_categories; Type: TABLE DATA; Schema: public; Owner: lucas
--

COPY public.tb_categories (id, name, description) FROM stdin;
\.


--
-- Data for Name: tb_persons; Type: TABLE DATA; Schema: public; Owner: lucas
--

COPY public.tb_persons (id, name, surname, email) FROM stdin;
\.


--
-- Data for Name: tb_products; Type: TABLE DATA; Schema: public; Owner: lucas
--

COPY public.tb_products (id, name, price, desctiption, id_category) FROM stdin;
\.


--
-- Data for Name: tb_users; Type: TABLE DATA; Schema: public; Owner: lucas
--

COPY public.tb_users (id, login, password, id_person) FROM stdin;
\.


--
-- Name: tb_categories tb_categories_pkey; Type: CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY public.tb_categories
    ADD CONSTRAINT tb_categories_pkey PRIMARY KEY (id);


--
-- Name: tb_persons tb_persons_email_key; Type: CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY public.tb_persons
    ADD CONSTRAINT tb_persons_email_key UNIQUE (email);


--
-- Name: tb_persons tb_persons_pkey; Type: CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY public.tb_persons
    ADD CONSTRAINT tb_persons_pkey PRIMARY KEY (id);


--
-- Name: tb_products tb_products_pkey; Type: CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY public.tb_products
    ADD CONSTRAINT tb_products_pkey PRIMARY KEY (id);


--
-- Name: tb_users tb_users_pkey; Type: CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY public.tb_users
    ADD CONSTRAINT tb_users_pkey PRIMARY KEY (id);


--
-- Name: tb_products tb_products_id_category_fkey; Type: FK CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY public.tb_products
    ADD CONSTRAINT tb_products_id_category_fkey FOREIGN KEY (id_category) REFERENCES public.tb_categories(id);


--
-- Name: tb_users tb_users_id_person_fkey; Type: FK CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY public.tb_users
    ADD CONSTRAINT tb_users_id_person_fkey FOREIGN KEY (id_person) REFERENCES public.tb_persons(id);


--
-- PostgreSQL database dump complete
--


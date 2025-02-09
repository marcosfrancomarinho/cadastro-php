<?php
interface IRegisterAdapter
{
   function createRegisterUser(string $name, string $email, string $password);
}

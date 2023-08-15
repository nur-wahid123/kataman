<?php
if (!session()->has('user')) echo "<script>window.location.href = '/loginn';</script>";

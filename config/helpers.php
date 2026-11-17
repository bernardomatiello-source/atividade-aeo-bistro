<?php
declare(strict_types=1);
// Funções auxiliares compartilhadas entre as páginas.

/** Escapa um valor para saída segura em HTML. */
function e($v): string { return htmlspecialchars((string)($v ?? ''), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }

/** Formata um valor numérico como moeda brasileira (R$ 1.234,56). */
function brl($v): string { return 'R$ '.number_format((float)$v, 2, ',', '.'); }

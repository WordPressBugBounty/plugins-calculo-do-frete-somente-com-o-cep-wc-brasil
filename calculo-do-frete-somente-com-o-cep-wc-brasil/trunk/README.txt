=== Cálculo do frete somente com o CEP - WC Brasil ===
Contributors: alvsconcelos
Donate link: http://picpay.me/alvsconcelos
Tags: woocommerce, frete, cep, calculadora de frete, frete sem cidade
Requires at least: 5.0
Tested up to: 6.9.4
Stable tag: 1.2.0
Requires PHP: 7.4
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Requires Plugins: woocommerce

Permite calcular o frete no WooCommerce digitando apenas o CEP — sem precisar informar cidade ou estado.

== Description ==

O WooCommerce exige que o cliente preencha **País**, **Estado** e **Cidade** para calcular o frete no carrinho. Para compradores brasileiros isso é uma barreira desnecessária: todo mundo sabe o CEP, mas nem sempre lembra a sigla do estado.

Este plugin resolve o problema de forma simples:

* **Oculta** os campos de País, Estado e Cidade do mini-calculador de frete no carrinho.
* **Mantém o campo de CEP sempre visível**, sem precisar clicar em "Calcular frete" para abri-lo.
* **Detecta automaticamente o Estado (UF)** a partir do CEP digitado pelo cliente.
* Suporta todos os 27 estados brasileiros, incluindo faixas de CEP do Distrito Federal, Amazonas, Goiás e demais estados com múltiplas faixas.
* **Máscara opcional no campo de CEP** (formato `00000-000`) ativável nas configurações.

= Configurações =

Após ativar o plugin, acesse **WooCommerce → Configurações → Entrega → Opções** para ativar ou desativar a máscara de CEP.

= Compatibilidade =

* WordPress 5.0 ou superior
* WooCommerce 5.0 ou superior
* PHP 7.4 ou superior

== Installation ==

= Instalação automática =

1. No painel do WordPress, vá em **Plugins → Adicionar novo**.
2. Pesquise por `Cálculo do frete somente com o CEP`.
3. Clique em **Instalar agora** e depois em **Ativar**.

= Instalação manual =

1. Faça o download do arquivo `.zip` do plugin.
2. No painel do WordPress, vá em **Plugins → Adicionar novo → Enviar plugin**.
3. Selecione o arquivo `.zip` e clique em **Instalar agora**.
4. Ative o plugin.

= Após a instalação =

Nenhuma configuração é obrigatória — o plugin funciona imediatamente após a ativação. Para ativar a máscara de CEP, acesse **WooCommerce → Configurações → Entrega → Opções**.

== Frequently Asked Questions ==

= O plugin funciona sem o WooCommerce? =

Não. O WooCommerce precisa estar instalado e ativo.

= Em quais páginas o plugin age? =

Somente na página do **carrinho** (`/carrinho` ou `/cart`), onde fica o mini-calculador de frete do WooCommerce.

= O plugin interfere no checkout? =

Não. O plugin afeta apenas o calculador de frete do carrinho, não os campos de endereço do checkout.

= O que acontece com CEPs inválidos ou inexistentes? =

Se o CEP digitado não pertencer a nenhuma faixa conhecida, o estado não é alterado e o WooCommerce exibirá seu comportamento padrão.

= Funciona com o bloco de carrinho do WooCommerce (Block Cart)? =

O plugin foi desenvolvido para o carrinho clássico (shortcode `[woocommerce_cart]`). Compatibilidade com o bloco está planejada para versões futuras.

== Screenshots ==

1. Calculadora de frete no carrinho: somente o campo de CEP aparece, com a máscara `00000-000` ativa.

== Changelog ==

= 1.2.0 =
* Atualizado: testado e compatível com WordPress 6.9.4 e WooCommerce 9.x / 10.x.
* Adicionado: cabeçalho `Requires Plugins: woocommerce` (padrão WP 6.5+).
* Atualizado: requisito mínimo de PHP elevado para 7.4.
* Adicionado: suite de testes automatizados com PHPUnit (disponível no repositório Git).
* Melhoria: arquivo de tradução PT-BR (.pot/.po) adicionado ao pacote.

= 1.1.3 =
* Código testado em versões atuais do WordPress e removidos comentários que disparavam falso positivo para malware.

= 1.1.1 =
* Bug onde o link de configurações não aparecia foi corrigido.

= 1.1.0 =
* Adicionada máscara opcional no campo do CEP e link para doações atualizado.

= 1.0 =
* Versão inicial publicada na loja.

== Upgrade Notice ==

= 1.2.0 =
Atualização de compatibilidade com WordPress 6.9.4 e WooCommerce 9.x/10.x. Recomendada para todos os usuários.

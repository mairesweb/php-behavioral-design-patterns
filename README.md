# Estudo de padrões de projetos em PHP

## Strategy

Estratégia é um padrão de design comportamental que permite definir uma família de algoritmos, colocar cada um deles em uma classe separada e tornar seus objetos intercambiáveis. Pode ser usado para resolver a existência de diversos algoritmos para uma ação, criando várias condicionais.

No código temos o exemplo da calculadora de impostos, onde cada imposto tem seu cálculo e pode ter inúmeros impostos. Normalmente, no método calcular é definido um switch ou ifs encadeados para cada imposto. Isso tende a crescer ao passo que cada imposto surja. A solução é criar uma classe para cada imposto, ao passo que cada um terá a função de cálculo do referido imposto.

Saber mais: https://refactoring.guru/design-patterns/strategy

## Chain of Responsibility

Chain of Responsibility é um padrão de design comportamental que permite que você passe solicitações ao longo de uma cadeia de responsabilidades. Ao receber uma solicitação, cada responsável decide se processa a solicitação ou se a passa para o próximo responsável na cadeia.

No código, é usado como exemplo, a calculadora de descontos. Porque cada orçamento pode ter um ou mais descontos, sendo que há uma prioridade entre os descontos. A solução foi criar uma classe para cada desconto e uma classe sem descontos. Caso ela resolva, retorna o valor. Caso contrário, aplica o próximo desconto.

Saber mais: https://refactoring.guru/design-patterns/chain-of-responsibility

## Template Method

Themplate Method é um padrão de design comportamental que define o esqueleto de um algoritmo na superclasse, mas permite que subclasses substituam etapas específicas do algoritmo sem alterar sua estrutura. Pode ser usada quando várias classes possuem métodos com a mesma estrutura, mudando apenas especificidades, como um cálculo interno.

É possível verificar o problema no Imposto Icpp e Ikvp, onde eles possuem calculo para taxa máxima ou taxa mínima. O método calculaImposto é igual nas duas classes. Isto gera código duplicado, o que é sempre ruim para a aplicação.

Saber mais: https://refactoring.guru/design-patterns/template-method

## State

State é um padrão de design comportamental que permite que um objeto altere seu comportamento quando seu estado interno muda. Parece que o objeto mudou sua classe.

Saber mais: https://refactoring.guru/design-patterns/state

## Command

Command é um padrão de design comportamental que transforma uma solicitação em um objeto independente que contém todas as informações sobre a solicitação. Essa transformação permite que você passe solicitações como argumentos de método, adie ou enfileire a execução de uma solicitação e suporte operações que podem ser desfeitas.

Saber mais: https://refactoring.guru/design-patterns/command

## Observer

Observer é um padrão de design comportamental que permite definir um mecanismo de assinatura para notificar vários objetos sobre quaisquer eventos que aconteçam com o objeto que eles estão observando.

Saber mais: https://refactoring.guru/design-patterns/observer

## Iterator

Iterator é um padrão de design comportamental que permite percorrer elementos de uma coleção sem expor sua representação subjacente (lista, pilha, árvore, etc.).

Saber mais: https://refactoring.guru/design-patterns/interator

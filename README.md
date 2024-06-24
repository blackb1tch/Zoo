# Тестовая задача реализации модели приложения-зоопарк

## Реализация

В рамках задания реализовано:

### Абстрактный класс организма (Organism.php), со следующими атрибутами:
- Кличка
- Пол (м/ж)
- Сытость (от 0 до 100%)
- Возраст (для всех от 0 до 30)
- Живо или нет
  
### Вольер организма (Enclosure.php), со следующими атрибутами:
- Закрыт/открыт для посещения
- Заперт/не заперт
- Крытый/без крыши
- Пища в кормушке (0-500 ед.)
 
### Классы организмов (models/organisms), наследующие Organism:

- Mammal (млекопитающие)
- Insect (насекомые)
- Reptile (рептилии)
- Bird (птицы)
- Arachnid (паукообразные)

### Классы животных (models/animals), наследующие соответствующие классы организмов:

- Газель (млекопитающее, травоядная, живородящая)
- Медведь (млекопитающее, всеядный, живородящий)
- Крокодил (рептилия, откладывает яйца, хищник)
- Пингвин (птица, не летает)
- Попугай (птица, летает)
- Тарантул (паукообразное, ядовит)
- Домовой паук (паукообразное, не ядовит)
- Волк (млекопитающее, хищник)
- Утконос (млекопитающее, откладывает яйца, ядовит)
- Уж (рептилия, не ядовит)
- Кобра (рептилия, ядовита)

### Фабрики для каждого класса организма (models/animals/factory):

- MammalFactory
- InsectFactory
- ReptileFactory
- BirdFactory
- ArachnidFactory

## Пример использования

### Функция хода животных
``` php
function animalTurn(array $enclosures) {
    foreach ($enclosures as $enclosure) {
        if ($enclosure->getAnimal()) {
            $animal = $enclosure->getAnimal();
            if ($animal->isAlive()) {
                $animal->addBioEntry("----------------");
                $animal->addBioEntry("Ход животного: {$animal->getName()}");

                // Повышение возраста
                $animal->setAge($animal->getAge()++);
                $animal->addBioEntry("Возраст: {$animal->getAge()}");

                // Смерть от старости
                if ($animal->getAge() >= 30) {
                    $animal->setIsDie();
                    $animal->addBioEntry("{$animal->getName()} умер от старости.");
                } else {
                    // Понижение сытости
                    $animal->setFullness($animal->getFullness()- rand(1, 10));
                    $animal->addBioEntry("Сытость: {$animal->getFullness()}");

                    // Смерть от голода
                    if ($animal->getFullness() <= 0) {
                        $animal->setIsDie();
                        $animal->addBioEntry("{$animal->getName()} умер от голода.");
                    } else {
                        // Питание
                        if ($enclosure->getFood() > 0) {
                            $animal->eat();
                            $enclosure->setFood($enclosure->getFood()- rand(1, 10));
                            $animal->setFullness($animal->getFullness() + rand(5, 20));
                        } else {
                            $animal->addBioEntry("{$animal->getName()} не нашел еды.");
                        }
                        // Перемещение
                        $animal->move();

                        // Размножение
                        if ($animal->getAge() >= 2) {
                            $animal->reproduce();
                        }
                    }
                }
            }
        }
    }
}
```

### Пример использования

``` php
$animalFactory = new MammalFactory();
$gazelle = $animalFactory->createAnimal('gazelle', 'Газель', 'ж');

$enclosure = new Enclosure();
$enclosure->setAnimal($gazelle);

$enclosures = [$enclosure];

// Симуляция хода животных
for ($i = 0; $i < 10; $i++) {
    animalTurn($enclosures);
    echo "----------------\n";
    echo "Ход: " . ($i + 1) . "\n\n";
    echo "Биографии животных:\n";
    foreach ($enclosures as $enclosure) {
        if ($enclosure->getAnimal()) {
            echo "{$enclosure->getAnimal()->getName()}: ";
            print_r($enclosure->getAnimal()->getBio());
            echo "\n";
        }
    }
    echo "\n";
}
```

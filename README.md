# Tasks-with-strings
Задачи по строкам:  10,11,12,13)   Написать свою реализацию следующих функций php: strpos, substr, substr_count, explode.

Какие выводы для себя сделала, на примере класса со строками.
1) Если есть изначальное свойство $this->longString "строка какая-нибудь", получченная извне или созданная в конструкторе, НЕ НАДО ее видоизменять в процессе махинаций с методами (Если явно не указано, что надо ее изменить...)

2)  $substr_count = 0; внутри метода - это хардкод, но заставлять комп делать дополнительные вычисления, операции - это еще больший маразм. Низя так делать! 

3) Порядок определения свойств и вызова методов - это Важно! http://prntscr.com/ku2s6d

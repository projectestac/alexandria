<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'badges', language 'ru', branch 'MOODLE_26_STABLE'
 *
 * @package   badges
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Действия';
$string['activate'] = 'Включить доступ';
$string['activatesuccess'] = 'Доступ к значкам был успешно включен.';
$string['addbadgecriteria'] = 'Добавить критерий значка';
$string['addcourse'] = 'Добавить курсы';
$string['addcourse_help'] = 'Выберите все курсы, которые необходимо пройти для получения этого значка. Удерживайте нажатой клавишу CTRL, чтобы выбрать несколько курсов.';
$string['addcriteria'] = 'Добавить критерии';
$string['addcriteriatext'] = 'Перед добавлением критерия выберите один из вариантов из раскрывающегося меню.';
$string['addtobackpack'] = 'Добавить в коллекцию наград';
$string['adminonly'] = 'Эта страница доступна только администраторам сайта.';
$string['after'] = 'после даты выдачи.';
$string['aggregationmethod'] = 'Метод объединения';
$string['all'] = 'Все';
$string['allmethod'] = 'Все выбранные режимы';
$string['allmethodactivity'] = 'Все выбранные активные элементы завершены';
$string['allmethodcourseset'] = 'Все выбранные курсы пройдены';
$string['allmethodmanual'] = 'Все выбранные роли награждают значком';
$string['allmethodprofile'] = 'Все выбранные поля профиля были заполнены';
$string['allowcoursebadges'] = 'Разрешить значки курса';
$string['allowcoursebadges_desc'] = 'Разрешить создавать значки и награждать ими в контексте курса.';
$string['allowexternalbackpack'] = 'Разрешить подключение к внешним коллекциям наград';
$string['allowexternalbackpack_desc'] = 'Разрешить пользователям настраивать соединения и отображать значки из их внешних коллекций наград.

Примечание: Рекомендуется отключить эту опцию , если  сайт не доступен из интернета (например, из-за брандмауэра).';
$string['any'] = 'Любое';
$string['anymethod'] = 'Любое из выбранных условий выполнено';
$string['anymethodactivity'] = 'Любой из выбранных активных элементов завершен';
$string['anymethodcourseset'] = 'Любой из выбранных курсов завершен';
$string['anymethodmanual'] = 'Любая выбранная роль награждает значком';
$string['anymethodprofile'] = 'Любое из выбранных полей профиля было заполнено';
$string['attachment'] = 'Прикрепить значок к сообщению';
$string['attachment_help'] = '';
$string['award'] = 'Наградной значок';
$string['awardedtoyou'] = 'Выданные мне';
$string['awardoncron'] = 'На сайте разрешено использование значков. Много пользователей могут незамедлительно получить этот значок.
Это действие будет растянуто во времени, чтобы обеспечить устойчивую работу сайта.';
$string['awards'] = 'Получатели';
$string['backpackavailability'] = 'Доверять внешним значкам';
$string['backpackavailability_help'] = 'Получатели значка должны иметь возможность доказать, что они у Вас заработали свои значки. Для этого внешняя служба коллекции наград должна иметь доступ к Вашему сайту, чтобы получить подтверждение о выданных значках. Ваш сайт в настоящее время недоступен, а значит, Ваши значки (уже выданные или перспективные) не могут быть проверены.

**Почему я вижу это сообщение?**

Такое может быть, если брандмауэр предотвращает доступ пользователей из внешней сети, Ваш сайт защищен паролем, или Вы работаете на локальном сайте,  недоступном из интернета (например, развернутом на локальной машине).

**Является ли это проблемой?**

Вы должны решить проблему на любом активном сайте, где планируете выдавать значки, иначе получатели не смогут доказать, что они у Вас заработали свои значки. Если сайт реально не используется в Сети, Вы можете создавать и выпускать тестовые значки на локальном сайте.

**Что делать, если я не могу сделать весь мой сайт общедоступным?**

Проверка значков будет работать, если Вы измените настройки брандмауэра и разрешите внешний доступ только к этому файлу: [your-site-url]/badges/assertion.php';
$string['backpackbadges'] = 'Вы имеете значки ({$a->totalbadges}), находящиеся в коллекции(ях) - {$a->totalcollections}. <a href="mybackpack.php">Изменить настройки коллекции наград</a>.';
$string['backpackconnection'] = 'Подключение к коллекции наград';
$string['backpackconnection_help'] = 'На этой странице можно настроить подключение к поставщику внешней коллекции наград. Подключение к коллекции наград позволяет отображать внешние значки на этом сайте, и размещать заработанные здесь значки в своей коллекции наград. В  настоящее время поддерживается только <a href="http://backpack.openbadges.org">Mozilla OpenBadges Backpack</a> . Вам нужно предварительно зарегистрироваться в службе коллекции наград, а потом на этой странице попытаться настроить связь с коллекцией.';
$string['backpackdetails'] = 'Настройки коллекции наград';
$string['backpackemail'] = 'Адрес электронной почты';
$string['backpackemail_help'] = 'Адрес электронной почты, связанный с Вашей коллекцией наград. При установлении соединения любые значки, заработанные на этом сайте, будут связаны с этим адресом электронной почты..';
$string['backpackimport'] = 'Настройки импорта значка';
$string['backpackimport_help'] = 'После успешного соединение с коллекцией наград, значки из коллекции могут быть отображены на странице «Мои Значки» и на странице Вашего профиля.

Здесь из коллекции Вы можете выбрать значки, которые хотите отобразить в своем профиле.';
$string['badgedetails'] = 'Подробнее о значке';
$string['badgeimage'] = 'Изображение';
$string['badgeimage_help'] = 'Такое изображение будет использоваться при выдаче этого значка.

Для использования нового изображения, подберите и выберите его (в формате JPG или PNG), а затем нажмите кнопку «Сохранить изменения».
Изображение будет обрезано до квадрата с изменением размера, чтобы оно соответствовало требованиям к изображению значка.';
$string['badgeprivacysetting'] = 'Настройки конфиденциальности значка';
$string['badgeprivacysetting_help'] = 'Заработанные Вами значки могут отображаться на странице Вашего профиля. Этот параметр позволяет настроить автоматическое отображение новых значков.

Кроме этого, Вы можете настраивать конфиденциальность отдельных значков на странице «Мои значки».';
$string['badgeprivacysetting_str'] = 'Автоматически показывать полученные значки на странице моего профиля';
$string['badgesalt'] = 'Зашумление для хеширования адреса электронной почты получателя значка';
$string['badgesalt_desc'] = 'Применение хэш позволяет службам коллекции наград подтверждать получение значков без необходимости подтверждения их через адрес электронной почты получателя. В этом параметре следует использовать только цифры и буквы.

Примечание: С целью подтверждения получателя, пожалуйста, избегайте изменения этого параметра после начала выдачи значков.';
$string['badgesdisabled'] = 'Использование значков не разрешено на этом сайте';
$string['badgesearned'] = 'Количество заработанных значков: {$a}';
$string['badgesettings'] = 'Настройки значков';
$string['badgestatus_0'] = 'Недоступно пользователям';
$string['badgestatus_1'] = 'Доступно пользователям';
$string['badgestatus_2'] = 'Недоступно пользователям';
$string['badgestatus_3'] = 'Доступно пользователям';
$string['badgestatus_4'] = 'Архив';
$string['badgestoearn'] = 'Количество возможных значков: {$a}';
$string['badgesview'] = 'Значки курса';
$string['badgeurl'] = 'Ссылка на выданный значок';
$string['bawards'] = 'Получатели - ({$a})';
$string['bcriteria'] = 'Критерии';
$string['bdetails'] = 'Редактировать сведения';
$string['bmessage'] = 'Сообщение';
$string['boverview'] = 'Обзор';
$string['bydate'] = 'завершить к';
$string['clearsettings'] = 'Сбросить настройки';
$string['completioninfo'] = 'Этот значок был выдан в связи с выполнением:';
$string['completionnotenabled'] = 'Завершение курса не включено в этом курсе, поэтому оно не может быть внесено в критерий значка. Завершение курса может быть включено в настройках курса.';
$string['configenablebadges'] = 'При включенном параметре разрешено создавать значки и награждать ими пользователей сайта.';
$string['configuremessage'] = 'Сообщение о значке';
$string['connect'] = 'Подключить';
$string['connected'] = 'Подключено';
$string['connecting'] = 'Подключение ...';
$string['contact'] = 'Связь';
$string['contact_help'] = 'Адрес электронной почты эмитента значка.';
$string['copyof'] = 'Копия {$a}';
$string['coursebadges'] = 'Значки';
$string['coursebadgesdisabled'] = 'Значки курса не разрешены на этом сайте.';
$string['coursecompletion'] = 'Пользователи должны завершить этот курс.';
$string['create'] = 'Новый значок';
$string['createbutton'] = 'Создать значок';
$string['creatorbody'] = '<p> {$a->user} выполнил(а) все необходимые условия и награжден(а) значком. Посмотреть выданный значок - {$a->link} </p>';
$string['creatorsubject'] = '{$a} награжден(а)!';
$string['criteria_0'] = 'Этот значок присуждается, когда ...';
$string['criteria_1'] = 'Завершен активный элемент';
$string['criteria_1_help'] = 'Пользователи награждаются знаком при завершении комплекса мероприятий в курсе.';
$string['criteria_2'] = 'Награждение вручную';
$string['criteria_2_help'] = 'Пользователи, которые имеют определенную роль в рамках сайта или курса, могут вручную награждать знаком.';
$string['criteria_3'] = 'Социальное партнерство';
$string['criteria_3_help'] = 'Социальное';
$string['criteria_4'] = 'Курс завершен';
$string['criteria_4_help'] = 'Знаком награждаются пользователи, которые завершили курс. Этот критерий может иметь дополнительные параметры, такие как минимальная оценка и дата окончания курса.';
$string['criteria_5'] = 'Завершение набора курсов';
$string['criteria_5_help'] = 'Знаком награждаются пользователи, которые завершили несколько курсов. Каждый курс может иметь дополнительные параметры, такие как минимальная оценка и дата окончания курса.';
$string['criteria_6'] = 'Сведения заполнены';
$string['criteria_6_help'] = 'Знаком награждаются пользователи, которые заполнили определенные поля в своем профиле. Вы можете выбрать поля профиля (заданные по умолчанию и настраиваемые), которые доступны для пользователей.';
$string['criteriacreated'] = 'Критерий значка создан';
$string['criteriadeleted'] = 'Критерий значка удален';
$string['criteria_descr'] = 'Пользователи награждаются этим значком при выполнении следующих условий:';
$string['criteria_descr_0'] = 'Пользователи награждаются этим знаком при завершении ими перечисленных требований (<strong>{$a}</strong>).';
$string['criteria_descr_1'] = '<strong>{$a}</strong> из следующих активных элементов будут завершены:';
$string['criteria_descr_2'] = 'Этим значком будут награждать пользователи (<strong>{$a}</strong>) со следующими ролями:';
$string['criteria_descr_4'] = 'Пользователи должны завершить курс';
$string['criteria_descr_5'] = '<strong>{$a}</strong> из следующих курсов должны быть завершены:';
$string['criteria_descr_6'] = '<strong>{$a}</strong> из следующих полей профиля должны быть заполнены:';
$string['criteria_descr_bydate'] = 'по <em>{$a}</em>';
$string['criteria_descr_grade'] = 'с минимальной оценкой <em>{$a}</em>';
$string['criteria_descr_short0'] = 'Завершение <strong>{$a}</strong> из:';
$string['criteria_descr_short1'] = 'Завершение <strong>{$a}</strong> из:';
$string['criteria_descr_short2'] = 'Награждение от <strong>{$a}</strong> из:';
$string['criteria_descr_short4'] = 'Закончить курс';
$string['criteria_descr_short5'] = 'Завершение <strong>{$a}</strong> из:';
$string['criteria_descr_short6'] = 'Заполнение <strong>{$a}</strong> из:';
$string['criteria_descr_single_1'] = 'Следующий активный элемент должен быть завершен:';
$string['criteria_descr_single_2'] = 'Этим значком будут награждаться пользователи со следующей ролью:';
$string['criteria_descr_single_4'] = 'Пользователи должны завершить курс';
$string['criteria_descr_single_5'] = 'Следующий курс должен быть закончен:';
$string['criteria_descr_single_6'] = 'Следующее поле профиля пользователя должно быть заполнено:';
$string['criteria_descr_single_short1'] = 'Завершено:';
$string['criteria_descr_single_short2'] = 'Награждены:';
$string['criteria_descr_single_short4'] = 'Закончить курс';
$string['criteria_descr_single_short5'] = 'Завершено:';
$string['criteria_descr_single_short6'] = 'Заполнено:';
$string['criteriasummary'] = 'Описание критерия';
$string['criteriaupdated'] = 'Критерий значка обновлен';
$string['criterror'] = 'Текущие параметры выдачи';
$string['criterror_help'] = 'Эти поля отображают все параметры, которые изначально были  добавлены в условия получения этого значка, но теперь не доступны. Рекомендуется снять галочку с таких параметров, чтобы быть уверенным, что в будущем пользователи смогут заработать этот значок.';
$string['currentimage'] = 'Текущее изображение';
$string['currentstatus'] = 'Текущий статус:';
$string['dateawarded'] = 'Дата выдачи';
$string['dateearned'] = 'Дата: {$a}';
$string['day'] = 'дн.';
$string['deactivate'] = 'Отключить доступ';
$string['deactivatesuccess'] = 'Доступ к значкам отключен.';
$string['defaultissuercontact'] = 'Связь по умолчанию с эмитентом значка';
$string['defaultissuercontact_desc'] = 'Адрес эл.почты эмитента значка.';
$string['defaultissuername'] = 'По умолчанию название эмитента значка';
$string['defaultissuername_desc'] = 'Наименование органа, агента или учреждения, выдавшего значок.';
$string['delbadge'] = 'Удалить значок';
$string['delconfirm'] = 'Вы уверены, что хотите удалить значок «{$a}»?';
$string['delcritconfirm'] = 'Вы уверены, что хотите удалить этот критерий?';
$string['delparamconfirm'] = 'Вы уверены, что хотите удалить этот параметр?';
$string['description'] = 'Описание';
$string['disconnect'] = 'Отключить';
$string['donotaward'] = 'В настоящее время этот значок не активен, поэтому он не может быть присужден пользователям. Если Вы хотите наградить этим значком, то установите его статус как активный.';
$string['editsettings'] = 'Изменить настройки';
$string['enablebadges'] = 'Включить значки';
$string['error:backpackdatainvalid'] = 'Возвращаемые данные из коллекции наград признаны недействительными.';
$string['error:backpackemailnotfound'] = 'Почтовый адрес «{$a}» не связан с коллекцией наград. Вы должны <a href="http://backpack.openbadges.org"> создать коллекцию наград</a> для этой учетной записи или войти с другого адреса электронной почты.';
$string['error:backpackloginfailed'] = 'Вы не можете быть подключены к внешней коллекции наград по следующей причине: {$a}';
$string['error:backpacknotavailable'] = 'Ваш сайт не доступен из Интернета, поэтому любые значки, выданные на этом сайте, не могут быть подтверждены службами внешней коллекции наград.';
$string['error:backpackproblem'] = 'Ошибка при подключении к службе Вашей коллекции наград. Пожалуйста, повторите попытку позже.';
$string['error:badjson'] = 'При попытке подключения возвращены неверные данные.';
$string['error:cannotact'] = 'Не удалось активировать значок.';
$string['error:cannotawardbadge'] = 'Не удалось пользователя наградить значком.';
$string['error:clone'] = 'Не удалось скопировать значок';
$string['error:connectionunknownreason'] = 'Подключение не удалось по неизвестной причине.';
$string['error:duplicatename'] = 'Значок с таким названием уже существует в системе.';
$string['error:externalbadgedoesntexist'] = 'Значок не найден';
$string['error:guestuseraccess'] = 'Вы используете гостевой доступ. Чтобы увидеть значки, нужно войти в систему с учетной записью пользователя.';
$string['error:invalidbadgeurl'] = 'Неверный формат URL-адреса эмитента значка.';
$string['error:invalidcriteriatype'] = 'Неверный тип критериев.';
$string['error:invalidexpiredate'] = 'Срок действия должен быть в будущем.';
$string['error:invalidexpireperiod'] = 'Срок действия не может быть отрицательным или равным 0.';
$string['error:noactivities'] = 'В этом курсе нет никаких активных элементов с критерием завершения.';
$string['error:nocourses'] = 'Завершение курса не включено ни для одного из курсов на этом сайте, поэтому отображать нечего. Завершение курса может быть включен в его настройках.';
$string['error:nogroups'] = '<p> Нет общих коллекций значков в Вашей коллекции наград. </p><p>Только общие коллекции могут быть показаны. Посетите <a href="http://backpack.openbadges.org">свою коллекцию наград</a>, чтобы создать несколько общих коллекций. </p>';
$string['error:nopermissiontoview'] = 'Вы не имеете разрешения на просмотр получателей значка';
$string['error:nosuchbadge'] = 'Значок с ID {$a} не существует.';
$string['error:nosuchcourse'] = 'Предупреждение: Этот курс больше не доступен.';
$string['error:nosuchfield'] = 'Предупреждение: Данное поле профиля пользователя больше недоступно.';
$string['error:nosuchmod'] = 'Предупреждение: этот активный элемент больше не доступен.';
$string['error:nosuchrole'] = 'Предупреждение: эта роль больше не доступна.';
$string['error:nosuchuser'] = 'Пользователь с этим адресом эл. почты не имеет учетной записи в этой коллекции наград.';
$string['error:notifycoursedate'] = 'Предупреждение: значки, связанные с курсом и завершением активных элементов не могут быть выданы до даты начала курса.';
$string['error:parameter'] = 'Предупреждение: хотя бы один параметр должен быть выбран для обеспечения корректной выдачи значка.';
$string['error:personaneedsjs'] = 'Для подключения к коллекции наград необходим javascript. Если есть возможность, включите javascript и перезагрузите страницу.';
$string['error:requesterror'] = 'Неудачный запрос на соединение  (код ошибки - {$a}).';
$string['error:requesttimeout'] = 'Время соединения истекло до окончания выполнения запроса.';
$string['error:save'] = 'Не удалось сохранить значок.';
$string['error:userdeleted'] = '{$a->user} (Пользователь больше не существует на сайте {$a->site})';
$string['evidence'] = 'Подтверждение';
$string['existingrecipients'] = 'Существующие получатели значка';
$string['expired'] = 'Не действительные';
$string['expiredate'] = 'Этот значок действителен до {$a}.';
$string['expireddate'] = 'Этот значок действовал до {$a}.';
$string['expireperiod'] = 'Этот значок действителен в течение {$a} дн. после выдачи.';
$string['expireperiodh'] = 'Этот значок действителен в течение {$a} час. после выдачи.';
$string['expireperiodm'] = 'Этот значок действителен в течение {$a} мин. после выдачи.';
$string['expireperiods'] = 'Этот значок действителен в течение {$a} сек. после выдачи.';
$string['expirydate'] = 'Дата окончания срока действия';
$string['expirydate_help'] = 'Необязательно: срок действия значка может истечь в конкретную дату или дата окончания рассчитывается, исходя из даты выдачи значка пользователю.';
$string['externalbadges'] = 'Мои значки с других сайтов';
$string['externalbadges_help'] = 'Здесь отображаются значки из внешних коллекций наград.';
$string['externalbadgesp'] = 'Значки с других сайтов:';
$string['externalconnectto'] = 'Для отображения внешних значков Вам нужно <a href="{$a}">подключиться к коллекции наград</a>.';
$string['fixed'] = 'Конкретная дата';
$string['hidden'] = 'Скрытый';
$string['hiddenbadge'] = 'К сожалению, владелец значка не сделал эту информацию доступной.';
$string['issuancedetails'] = 'Срок действия значка';
$string['issuedbadge'] = 'Информация о выданных значках';
$string['issuerdetails'] = 'Сведения об эмитенте';
$string['issuername'] = 'Наименование эмитента';
$string['issuername_help'] = 'Наименование органа, агента или учреждения, выдавшего значок.';
$string['issuerurl'] = 'URL-адрес эмитента';
$string['localbadges'] = 'Мои значки с сайта {$a}';
$string['localbadgesh'] = 'Мои значки с этого сайта';
$string['localbadgesh_help'] = 'Все значки, заработанные на этом веб-сайте, связаны с завершением курсов, их активных элементов и другими требованиями.

Вы можете управлять значками в своем профиле, сделав их общими или личными.

Вы можете скачать все свои значки или отдельные из них и сохранять их на компьютере. Скачанные значки могут быть добавлены в Вашу коллекцию наград во внешней службе.';
$string['localbadgesp'] = 'Значки из {$a}:';
$string['localconnectto'] = 'Чтобы обнародовать эти значки за пределами этого сайта, Вам нужно <a href="{$a}">подключиться к коллекции наград</a> .';
$string['makeprivate'] = 'Сделать личным';
$string['makepublic'] = 'Обнародовать';
$string['managebadges'] = 'Управление значками';
$string['message'] = 'Текст сообщения';
$string['messagebody'] = '<p> Вы были награждены значком «%badgename%»! </p><p> Более подробную информацию об этом значке можно найти на %badgelink%. </p><p> Если значок не прилагается к этому письму, то Вы можете скачать его со страницы {$a}. </p>';
$string['messagesubject'] = 'Поздравляем! Вы награждены значком!';
$string['method'] = 'Этот критерий считается выполненным, когда ...';
$string['mingrade'] = 'Требуемая минимальная оценка';
$string['month'] = 'Месяц(ев)';
$string['mybackpack'] = 'Настройки моей коллекции наград';
$string['mybadges'] = 'Мои значки';
$string['never'] = 'Никогда';
$string['newbadge'] = 'Добавить новый значок';
$string['newimage'] = 'Новое изображение';
$string['noawards'] = 'Этот значок пока не заработан.';
$string['nobackpack'] = 'Нет службы коллекции наград, связанных с этой учетной записью. <br/>';
$string['nobackpackbadges'] = 'Нет значков в выбранных Вами коллекциях. <a href="mybackpack.php">Еще добавить коллекции</a>.';
$string['nobackpackcollections'] = 'Коллекции знаков не выбраны. <a href="mybackpack.php">Добавить коллекции</a> .';
$string['nobadges'] = 'Там нет доступных значков.';
$string['nocriteria'] = 'Критерии для этого значка еще не установлены.';
$string['noexpiry'] = 'У этого значка нет срока действия.';
$string['noparamstoadd'] = 'Нет дополнительных требований, которые можно добавить к этим условиям получения значка.';
$string['notacceptedrole'] = 'Ваша текущая роль не входит в число ролей, которые могут вручную выдать этот значок. <br/> Посмотреть, кто из пользователей уже заработал этот значок, Вы можете на странице {$a} .';
$string['notconnected'] = 'Нет соединения';
$string['nothingtoadd'] = 'Добавить нечего - нет доступных критериев.';
$string['notification'] = 'Сообщение создателю значка';
$string['notification_help'] = 'Эта настройка управляет уведомлениями, отправляемыми создателю значка с сообщением о выдаче значка.

Доступны следующие варианты:

* ** НИКОГДА ** - Не отправлять уведомления.

* ** КАЖДЫЙ РАЗ ** - отправлять уведомление каждый раз при выдаче этого значка.

* ** ЕЖЕДНЕВНО ** - отправлять уведомления раз в день.

* ** ЕЖЕНЕДЕЛЬНЫЙ ** - отправлять уведомления раз в неделю.

* ** ЕЖЕМЕСЯЧНО ** - отправлять уведомления раз в месяц.';
$string['notifydaily'] = 'Ежедневно';
$string['notifyevery'] = 'Каждый раз';
$string['notifymonthly'] = 'Ежемесячно';
$string['notifyweekly'] = 'Еженедельно';
$string['numawards'] = 'Этот значок был выдан <a href="{$a->link}">{$a->count}</a> пользователю(ям).';
$string['numawardstat'] = 'Этот значок был выдан {$a} пользователю(ям).';
$string['overallcrit'] = 'из выбранных критериев выполнены.';
$string['personaconnection'] = 'Войти с помощью эл. почты';
$string['personaconnection_help'] = 'Persona представляет собой систему идентификации в сети с использованием имеющегося адреса электронной почты. Коллекция наград Open Badges использует Persona как систему авторизации, поэтому, чтобы иметь возможность подключиться к Open Badges, Вам необходимо использовать учетную запись Persona.

Для получения дополнительных сведений о Persona посетите <a href="https://login.persona.org/about">сайт Persona.org</a> .';
$string['potentialrecipients'] = 'Потенциальные получатели значка';
$string['recipientdetails'] = 'Сведения о получателе';
$string['recipientidentificationproblem'] = 'Не удалось найти получателя этого значка среди имеющихся пользователей.';
$string['recipients'] = 'Получатели значка';
$string['recipientvalidationproblem'] = 'Текущий пользователь не может быть подтвержден в качестве получателя этого значка.';
$string['relative'] = 'Относительная дата';
$string['requiredcourse'] = 'По меньшей мере один курс должен быть добавлен к критерию завершения нескольких курсов.';
$string['reviewbadge'] = 'Изменения доступа к значку';
$string['reviewconfirm'] = '<p> Это сделает значок невидимым для пользователей и даст им возможность начать зарабатывать его. </p><p> Вполне возможно, что некоторые пользователи уже выполнили условия получения этого значка и этот значок будет создан сразу после его включения. </p><p> После того, как значок будет создан, он будет <strong>заблокирован</strong> - определенные параметры, включая критерии и настройки истечения больше не могут быть изменены. </p><p> Вы уверены, что хотите разрешить доступ к значку «{$a}»? </p>';
$string['save'] = 'Сохранить';
$string['searchname'] = 'Поиск по названию';
$string['selectaward'] = 'Пожалуйста, выберите роль, которой Вы хотите разрешить присуждать этот значок:';
$string['selectgroup_end'] = 'Только общие коллекции показаны, <a href="http://backpack.openbadges.org">посетите свою коллекцию наград</a>, чтобы обнародовать больше коллекций.';
$string['selectgroup_start'] = 'Выберите коллекцию из своей коллекции наград для отображения на этом сайте:';
$string['selecting'] = 'С выбранными значками ...';
$string['setup'] = 'Настройка подключения';
$string['signinwithyouremail'] = 'Войти с использованием эл. почты';
$string['sitebadges'] = 'Значки сайта';
$string['sitebadges_help'] = 'Значками сайта пользователи могут быть награждены только за деятельность на сайте. Она включает в себя завершение нескольких курсов или заполнение профилей пользователей. Значки сайта могут также быть выданы вручную одним пользователем другому.

Значки за активные элементы курса должны быть созданы на уровне курса. Значки курса можно найти в разделе Управление курсом > Значки.';
$string['status'] = 'Статус значка';
$string['status_help'] = 'Статус значка определяет его поведение в системе:

* ** ДОСТУПЕН ** - означает, что этот значок  пользователи могут заработать. Когда значок доступен для пользователей, его критерии не могут быть изменены.

* ** НЕ ДОСТУПЕН** - означает, что этот значок не доступен для пользователей и не может быть получен или выдан вручную. Если это значок никогда не был выдан, то его критерии могут быть изменены.

* ** ЗАБЛОКИРОВАН **- после того, как значок был выдан хотя бы одному пользователю, то он автоматически блокируется. Заблокированные значки могут быть заработаны пользователями, но их критерии не могут быть изменены. Если нужно изменить детали или критерии заблокированного значка, то Вы можете продублировать этот значок и сделать все необходимые изменения.

* Зачем блокируются значки? *

Мы должны быть уверены, что все пользователи выполняют одинаковые условия при получении значка. В настоящее время это не возможно, кроме как отзывать выданные значки. Если мы позволим в любое время изменять условия получения значков, то пользователи, скорее всего, в конечном итоге получат одинаковые значки при удовлетворении совершенно разных требований.';
$string['statusmessage_0'] = 'В настоящее время этот значок не доступен для пользователей. Разрешите доступ, если хотите, чтобы пользователи могли заработать этот значок.';
$string['statusmessage_1'] = 'В настоящее время этот значок доступен для пользователей. Запретите доступ, чтобы сделать какие-то изменения.';
$string['statusmessage_2'] = 'В настоящее время этот значок не доступен для пользователей и его критерии заблокированы. Разрешите доступ, если хотите, чтобы пользователи могли заработать этот значок.';
$string['statusmessage_3'] = 'В настоящее время этот значок доступен для пользователей и его критерии заблокированы.';
$string['statusmessage_4'] = 'Этот значок в настоящее время архивный.';
$string['subject'] = 'Тема письма';
$string['variablesubstitution'] = 'Замена переменных в сообщениях.';
$string['variablesubstitution_help'] = 'В тему и/или тело сообщения о значке могут быть вставлены определенные переменные.   Они будут заменены реальными значениями при отсылке сообщения. Переменные должны быть вставлены в текст точно так, как показано ниже. Могут быть использованы следующие переменные:

%badgename% - будет заменено на полное название значка.

%username% - это будет заменено на полное имя получателя значка.

%badgelink% - будет заменено на общедоступный URL-адрес с информацией о выданном значке.';
$string['viewbadge'] = 'Посмотреть выданные значки';
$string['visible'] = 'Видимый';
$string['warnexpired'] = '(Срок действия этого значка истек!)';
$string['year'] = 'Год(ы)';
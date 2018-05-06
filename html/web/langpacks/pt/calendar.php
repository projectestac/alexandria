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
 * Strings for component 'calendar', language 'pt', branch 'MOODLE_32_STABLE'
 *
 * @package   calendar
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addevent'] = 'Adicionar eventos';
$string['advancedoptions'] = 'Opções avançadas';
$string['allday'] = 'Todo o dia';
$string['annually'] = 'Anualmente';
$string['calendar'] = 'Calendário';
$string['calendarheading'] = 'Calendário de {$a}';
$string['calendarpreferences'] = 'Preferências do calendário';
$string['calendartypes'] = 'Tipos de calendário';
$string['calendarurl'] = 'URL do calendário: {$a}';
$string['clickhide'] = 'clique para ocultar';
$string['clickshow'] = 'clique para mostrar';
$string['colactions'] = 'Ações';
$string['colcalendar'] = 'Calendário';
$string['collastupdated'] = 'Última atualização';
$string['colpoll'] = 'Atualizar';
$string['commontasks'] = 'Opções';
$string['confirmeventdelete'] = 'Tem a certeza que pretende apagar o evento "{$a}"?';
$string['course'] = 'Disciplina';
$string['courseevent'] = 'Evento da disciplina';
$string['courseevents'] = 'Eventos da disciplina';
$string['courses'] = 'Disciplinas';
$string['customexport'] = 'Personalizar intervalo ({$a->timestart} - {$a->timeend})';
$string['daily'] = 'Diariamente';
$string['dayviewfor'] = 'Vista do dia de:';
$string['dayviewtitle'] = 'Vista do dia: {$a}';
$string['daywithnoevents'] = 'Não existem eventos marcados para este dia.';
$string['default'] = 'Predefinido';
$string['deleteevent'] = 'Apagar evento';
$string['deleteevents'] = 'Apagar eventos';
$string['detailedmonthviewfor'] = 'Vista detalhada do mês:';
$string['detailedmonthviewtitle'] = 'Vista detalhada do mês: {$a}';
$string['durationminutes'] = 'Duração em minutos';
$string['durationnone'] = 'Sem duração';
$string['durationuntil'] = 'Até (data e hora)';
$string['editevent'] = 'A editar evento';
$string['erroraddingevent'] = 'Falha ao adicionar evento';
$string['errorbadsubscription'] = 'Subscrição de Calendário não encontrada.';
$string['errorbeforecoursestart'] = 'Não é possível definir eventos antes da data de início da disciplina';
$string['errorcannotimport'] = 'Não pode definir uma subscrição do calendário neste momento.';
$string['errorhasuntilandcount'] = 'Quer UNTIL ou COUNT podem aparecer numa regra de recorrência, mas UNTIL e COUNT não devem ocorrer na mesma regra de recorrência.';
$string['errorinvalidbydayprefix'] = 'Valores inteiros a preceder as regras BYDAY apenas pode acontecer em MONTHLY ou YEARLY RRULE.';
$string['errorinvalidbydaysuffix'] = 'Os valores válidos para a parte do dia da semana na regra BYDAY são SE, TE, QA, QI, SE, SA e DO';
$string['errorinvalidbyhour'] = 'Os valores válidos para a regra BYHOUR são 0 a 23.';
$string['errorinvalidbyminute'] = 'Os valores válidos para a regra BYMINUTE são 0 a 59.';
$string['errorinvalidbymonth'] = 'Os valores válidos para a regra BYMONTH são 1 a 12.';
$string['errorinvalidbymonthday'] = 'Os valores válidos para a regra BYMONTHDAY são 1 a 31 ou -31 a -1.';
$string['errorinvalidbysecond'] = 'Os valores válidos para a regra BYSECOND são 1 a 59.';
$string['errorinvalidbysetpos'] = 'Os valores válidos para a regra BYSETPOS são 1 a 366 ou -366 a -1.';
$string['errorinvalidbyweekno'] = 'Os valores válidos para a regra BYWEEKNO são 1 a 53 ou -53 a -1.';
$string['errorinvalidbyyearday'] = 'Os valores válidos para a regra BYYEARDAY são 1 a 366 ou -366 a -1.';
$string['errorinvaliddate'] = 'Data não válida';
$string['errorinvalidicalurl'] = 'O URL do iCal fornecido não é válido.';
$string['errorinvalidinterval'] = 'O valor da regra INTERVAL deve ser um número inteiro positivo.';
$string['errorinvalidminutes'] = 'Indique a duração, em minutos, por meio de um número entre 1 e 999.';
$string['errorinvalidrepeats'] = 'Indique o número de eventos por meio de um número entre 1 e 99.';
$string['errormustbeusedwithotherbyrule'] = 'A regra BYSETPOS deve ser usada apenas em conjunto com outra parte da regra BYxxx.';
$string['errornodescription'] = 'A descrição é obrigatória';
$string['errornoeventname'] = 'O nome é obrigatório';
$string['errornonyearlyfreqwithbyweekno'] = 'A regra BYWEEKNO só é válida para regras YEARLY.';
$string['errorrequiredurlorfile'] = 'É necessário um URL ou um ficheiro para importar um calendário.';
$string['errorrrule'] = 'Rrule parece estar incorreta';
$string['errorrruleday'] = 'Rrule tem um parâmetro dia inválido';
$string['errorrrulefreq'] = 'Rrule tem um parâmetro frequência inválido';
$string['eventcalendareventcreated'] = 'Criado evento de calendário';
$string['eventcalendareventdeleted'] = 'Evento de calendário eliminado';
$string['eventcalendareventupdated'] = 'Evento de calendário atualizado';
$string['eventdate'] = 'Data e hora do evento';
$string['eventdescription'] = 'Descrição';
$string['eventduration'] = 'Duração';
$string['eventendtime'] = 'Hora de fim';
$string['eventinstanttime'] = 'Tempo';
$string['eventkind'] = 'Tipo de evento';
$string['eventname'] = 'Designação do evento';
$string['eventnone'] = 'Sem eventos';
$string['eventrepeat'] = 'Com repetição';
$string['eventsall'] = 'Todos os eventos';
$string['eventsdeleted'] = 'Eventos eliminados';
$string['eventsfor'] = '{$a} eventos';
$string['eventsimported'] = 'Eventos importados: {$a}';
$string['eventskey'] = 'Tipo de eventos';
$string['eventspersonal'] = 'Os meus eventos pessoais';
$string['eventsrelatedtocourses'] = 'Eventos relativos a esta disciplina';
$string['eventsrelatedtogroups'] = 'Eventos relacionados com grupos';
$string['eventstarttime'] = 'Hora de início';
$string['eventstoexport'] = 'Eventos para exportar';
$string['eventsubscriptioncreated'] = 'Criada subscrição de calendário';
$string['eventsubscriptiondeleted'] = 'Subscrição de calendário apagada';
$string['eventsubscriptionupdated'] = 'Subscrição de calendário atualizada';
$string['eventsupdated'] = 'Eventos atualizados: {$a}';
$string['eventtime'] = 'Hora';
$string['eventview'] = 'Detalhes do evento';
$string['expired'] = 'Expirou';
$string['explain_site_timeformat'] = 'Pode escolher o modo de visualização das horas no formato de 12 ou 24 para todo o site. Se escolher a opção "Predefinido", o formato vai ser automaticamente escolhido de acordo com o idioma utilizado no site. Esta configuração pode ser alterada nas preferências do utilizador.';
$string['export'] = 'Exportar';
$string['exportbutton'] = 'Exportar';
$string['exportcalendar'] = 'Exportar calendário';
$string['for'] = 'para';
$string['forcecalendartype'] = 'Forçar calendário';
$string['fri'] = 'Sex';
$string['friday'] = 'Sexta';
$string['generateurlbutton'] = 'Obter URL do calendário';
$string['global'] = 'Global';
$string['globalevent'] = 'Evento global';
$string['globalevents'] = 'Eventos globais';
$string['gotocalendar'] = 'Ir para o calendário';
$string['group'] = 'Grupo';
$string['groupevent'] = 'Evento do grupo';
$string['groupevents'] = 'Eventos do grupo';
$string['hidecourseevents'] = 'Ocultar eventos da disciplina';
$string['hideglobalevents'] = 'Ocultar eventos globais';
$string['hidegroupsevents'] = 'Ocultar eventos do grupo';
$string['hideuserevents'] = 'Ocultar eventos do utilizador';
$string['hourly'] = 'De hora a hora';
$string['ical'] = 'iCal';
$string['importcalendar'] = 'Importar calendário';
$string['importcalendarfrom'] = 'Importar de';
$string['importcalendarheading'] = 'Importar calendário...';
$string['importfromfile'] = 'Ficheiro de calendário (.ics)';
$string['importfrominstructions'] = 'Por favor, forneça um URL para um calendário remoto ou carregue um ficheiro.';
$string['importfromurl'] = 'URL do calendário';
$string['invalidtimedurationminutes'] = 'A duração indicada em minutos não é válida. Indique uma duração maior que zero ou não indique duração.';
$string['invalidtimedurationuntil'] = 'A data e hora que selecionou para a duração é anterior à hora de início do evento. Corrija antes de continuar.';
$string['iwanttoexport'] = 'Exportar';
$string['managesubscriptions'] = 'Gerir subscrições';
$string['manyevents'] = '{$a} eventos';
$string['mon'] = 'Seg';
$string['monday'] = 'Segunda';
$string['monthly'] = 'Mensalmente';
$string['monthlyview'] = 'Eventos do mês';
$string['monthnext'] = 'Mês seguinte';
$string['monththis'] = 'Este mês';
$string['namewithsource'] = '{$a->name}({$a->source})';
$string['never'] = 'Nunca';
$string['newevent'] = 'Novo evento';
$string['nocalendarsubscriptions'] = 'Não tem subscrições de calendários.';
$string['notitle'] = 'sem título';
$string['noupcomingevents'] = 'Não existem eventos futuros';
$string['oneevent'] = '1 evento';
$string['pollinterval'] = 'Atualizar intervalo';
$string['pollinterval_help'] = 'Defina a periodicidade de atualização de novos eventos do calendário.';
$string['preferences'] = 'Preferências';
$string['preferences_available'] = 'As suas preferências pessoais';
$string['preferredcalendar'] = 'Calendário preferido';
$string['pref_lookahead'] = 'Visão prévia de próximos eventos';
$string['pref_lookahead_help'] = 'Definir o número (máximo) de dias futuros para o início de um evento para que seja mostrado como um próximo evento. Os eventos que iniciam fora desta definição não serão mostrados como próximos eventos. Tenha em atenção que <strong>não há garantia</strong> que todos os eventos a partir deste período de tempo sejam mostrados e se existirem muitos (mais do que definido em "máximo de próximos eventos"), os mais distantes não serão mostrados.';
$string['pref_maxevents'] = 'Número máximo de próximos eventos';
$string['pref_maxevents_help'] = 'Isto define o número máximo de eventos que podem ser exibidos. Se definir um grande número aqui é possível que os próximos eventos ocupem muito espaço na sua disciplina.';
$string['pref_persistflt'] = 'Lembrar configurações do filtro';
$string['pref_persistflt_help'] = 'Se esta opção estiver ativa, o Moodle recordará as configurações do seu último evento e irá utilizá-las sempre que iniciar uma sessão.';
$string['pref_startwday'] = 'Primeiro dia da semana';
$string['pref_startwday_help'] = 'As semanas dos calendários serão mostradas a começar no dia selecionado aqui.';
$string['pref_timeformat'] = 'Formato da hora';
$string['pref_timeformat_help'] = 'Pode optar por ver as horas em formato 12h ou 24h. Se escolher "Por omissão" o formato será escolhido com base no pacote linguístico em utilização.';
$string['quickdownloadcalendar'] = 'Descarregar / subscrever o calendário';
$string['recentupcoming'] = 'Dias recentes e próximos 60';
$string['repeatedevents'] = 'Eventos repetidos';
$string['repeateditall'] = 'Aplicar as alterações também aos restantes {$a} eventos desta série de eventos repetidos';
$string['repeateditthis'] = 'Aplicar as altrações unicamente a este evento';
$string['repeatevent'] = 'Repetir este evento';
$string['repeatnone'] = 'Sem repetição';
$string['repeatweeksl'] = 'Repetição semanal (total de semanas)';
$string['repeatweeksr'] = 'eventos';
$string['sat'] = 'Sab';
$string['saturday'] = 'Sábado';
$string['showcourseevents'] = 'Mostrar eventos da disciplina';
$string['showglobalevents'] = 'Mostrar eventos globais';
$string['showgroupsevents'] = 'Mostrar eventos do grupo';
$string['shown'] = 'mostrado';
$string['showuserevents'] = 'Mostrar eventos do utilizador';
$string['siteevents'] = 'Eventos do site';
$string['spanningevents'] = 'Eventos a decorrer';
$string['subscriptionname'] = 'Nome do calendário';
$string['subscriptionremoved'] = 'Subscrições do calendário removidas {$a}';
$string['subscriptions'] = 'Subscrições';
$string['subscriptionupdated'] = 'Subscrições do calendário atualizadas {$a}';
$string['subsource'] = 'Origem do evento: {$a->name}';
$string['sun'] = 'Dom';
$string['sunday'] = 'Domingo';
$string['thu'] = 'Qui';
$string['thursday'] = 'Quinta';
$string['timeformat_12'] = '12 horas (AM/PM)';
$string['timeformat_24'] = '24 horas';
$string['timeperiod'] = 'Período de tempo';
$string['today'] = 'Hoje';
$string['tomorrow'] = 'Amanhã';
$string['tt_deleteevent'] = 'Apagar evento';
$string['tt_editevent'] = 'Editar evento';
$string['tt_hidecourse'] = 'Eventos da disciplina visíveis (clique para ocultar)';
$string['tt_hideglobal'] = 'Eventos globais visíveis (clique para ocultar)';
$string['tt_hidegroups'] = 'Eventos do grupo visíveis (clique para ocultar)';
$string['tt_hideuser'] = 'Eventos do utilizador visíveis (clique para ocultar)';
$string['tt_showcourse'] = 'Eventos da disciplina ocultos (clique para mostrar)';
$string['tt_showglobal'] = 'Eventos globais ocultos (clique para mostrar)';
$string['tt_showgroups'] = 'Eventos do grupo ocultos (clique para mostrar)';
$string['tt_showuser'] = 'Eventos do utilizador ocultos (clique para mostrar)';
$string['tue'] = 'Ter';
$string['tuesday'] = 'Terça';
$string['typecourse'] = 'Evento da disciplina';
$string['typegroup'] = 'Evento do grupo';
$string['typesite'] = 'Evento do site';
$string['typeuser'] = 'Evento do utilizador';
$string['upcomingevents'] = 'Próximos eventos';
$string['upcomingeventsfor'] = 'Próximos eventos para:';
$string['urlforical'] = 'Endereço URL para a exportação do iCalendar, para subscrever ao calendário';
$string['user'] = 'Utilizador';
$string['userevent'] = 'Evento de Utilizador';
$string['userevents'] = 'Eventos do utilizador';
$string['wed'] = 'Qua';
$string['wednesday'] = 'Quarta';
$string['weekly'] = 'Semanalmente';
$string['weeknext'] = 'Próxima semana';
$string['weekthis'] = 'Esta semana';
$string['yesterday'] = 'Ontem';
$string['youcandeleteallrepeats'] = 'Este evento faz parte de uma série de eventos repetitivos. Pode apagar apenas este evento ou todos os {$a} eventos da série.';
